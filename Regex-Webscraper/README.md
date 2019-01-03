This Directory origonates from ECHibiki's https://github.com/ECHibiki/Regex-Webscraper

# Regex-WebScrapper
A CLI for retrieving info from web pages done on python3.7 <br/><br/>
python3 regexscraper -u "https://example.com" -r "(t|r)est"<br/>
This outputs all regex matches on site -s with pattern -r using selenium JS rendered sites 
<br/>
Selenium requires a fair amount of overhead RAM to run so if you're stretching the limits of your server's ability already you may run into some difficulties.
If the purpose of this is to scan for proxies, Tor and VPN nodes such as I use it, then it might be better to run this on a desktop machine and transfer logs over to your server<br>
## Regex patterns:
IP Addresses Tupple: ((([0-1]{0,1}[0-9]{0,2}|25[0-5]|2[0-4][0-9])\.){3}([0-1]{0,1}[0-9]{0,2}|25[0-5]|2[0-4][0-9])) This returns a tupple with the full address at the 0th index <br/>
IP Address Sort of: \d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3} Returns a string of the IP address that is not nescicarily accurate
## Things: 
https://stackoverflow.com/questions/39547598/selenium-common-exceptions-webdriverexception-message-connection-refused<br/>
https://stackoverflow.com/questions/8220108/how-do-i-check-the-operating-system-in-python<br/>
https://selenium-python.readthedocs.io/api.html<br/>
https://stackoverflow.com/questions/1285917/how-to-disable-javascript-when-using-selenium/51681608#51681608<br/>
