#!/usr/bin/env LC_ALL=en_US.UTF-8 /usr/bin/python3

from pyvirtualdisplay import Display
from selenium import webdriver
from sys import platform
import sys
import re
import string
import json
import requests
import traceback

browser = None
nojs = False
output_json = False
raw = False

def print_matches(matches):
    global output_json
    i = 0
    if output_json:
        print(json.dumps(matches))
    else:
        for match in matches:
            if match.strip() == "":
                continue
            print (match)

def init():
    # On ubuntu/linux initialize with xvfb-run python3 Regex-Webscraper/py-cmd/regexscraper.py -u $sites_string -r \"$regex_pattern\" --nojs --json
    global browser, nojs
    ff_profile = webdriver.FirefoxProfile()
    ff_profile.DEFAULT_PREFERENCES['frozen']['javascript.enabled'] = not nojs
    ff_profile.set_preference("app.update.auto", False)
    ff_profile.set_preference("app.update.enabled", False)
    ff_profile.update_preferences()
    browser = webdriver.Firefox(firefox_profile=ff_profile)
    #browser.get("about:config")

def scrape_pages(site_list, pattern):
    global browser
    site_list_arr = site_list.split(',')
    matches = []
    for site in site_list_arr:
        browser.get(site)
        matches = matches + re.findall(pattern, browser.page_source)
    return matches

def raw_scrape_pages(site_list, pattern):
    global browser
    site_list_arr = site_list.split(',')
    matches = []
    for site in site_list_arr:
        try:
            page_text = requests.get(site, timeout=15.00).text
            matches = matches + re.findall(pattern, page_text)
        except Exception as err:
            print(site + " " + "Not found")
            with open("err_log.txt", "a+") as log:
                log.write(str(traceback.format_exc()) + "\n\n")
                log.close
    return matches

if __name__ == "__main__":
    argv = sys.argv
    details = {}
    del argv[0]
    for index, arg in enumerate(argv):
        if arg[0] != '-':
            continue
        else:
            arg_val = ""
            try:
                if arg == "-u":
                    arg_val = argv[index + 1]
                    pass
                elif arg == "-r":
                    arg_val = argv[index + 1]

                    if 'C:/Program ' in arg_val or "/var/www/html/" in arg_val :
                        print("Invalid Syntax : Regex should not be enclosed in /")
                        exit()
                    pass
                elif arg == "--nojs":
                    nojs = True
                    pass
                elif arg == "--json":
                    output_json = True
                    pass
                elif arg == "--raw":
                    raw = True
                    pass
                else:
                    print("Invalid Command Line Argument: " + arg)
                    exit()
            except IndexError:
                print("Invalid Syntax : Index Error")
                exit()
            except:
                print("Invalid Syntax : Undefined Error")
                exit()
            details[arg] = arg_val
    if '-u' not in details:
        print("Missing URL : -u")
        exit()
    if '-r' not in details:
        print("Missing Regex: -r")
        exit()
    if raw:
        print_matches(raw_scrape_pages(details['-u'], details['-r']))
    else:
        init()
        print_matches(scrape_pages(details['-u'], details['-r']))
        browser.quit()
    exit()
