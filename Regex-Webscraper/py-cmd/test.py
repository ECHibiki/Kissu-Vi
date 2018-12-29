from pyvirtualdisplay import Display
from selenium import webdriver
from sys import platform
import sys
import re
import string
import json

browser = None

def init():
    # On ubuntu/linux initialize with xvfb-run python3 Regex-Webscraper/py-cmd/regexscraper.py -u $sites_string -r \"$regex_pattern\" --nojs --json
    global browser
    ff_profile = webdriver.FirefoxProfile()
    browser = webdriver.Firefox(firefox_profile=ff_profile)
    #browser.get("about:config")

if __name__ == "__main__":
    init()
    browser.quit()
    exit()