# import required module

import requests
import json
from datetime import datetime, tzinfo
from dateutil import tz
import pytz

#dt_str  = "10/21/2021 8:18:19"
utc_time = str(datetime.utcnow())
format  = "%Y-%m-%d %H:%M:%S.%f"
# Create datetime object in local timezone
dt_utc = datetime.strptime(utc_time, format)
dt_utc = dt_utc.replace(tzinfo=pytz.UTC)
# print('Datetime in UTC Time zone: ', dt_utc)
# Get local timezone
local_zone = tz.tzlocal()
# Convert timezone of datetime from UTC to local
dt_local = dt_utc.astimezone(local_zone)
local_time_str = dt_local.strftime(format)


# mention url
url = "https://www.fast2sms.com/dev/bulkV2"


# create a dictionary
my_data = {
# Your default Sender ID
'sender_id': 'FSTSMS',

# Put your message here!
'message': 'The car with number plate MH02CT2727 passed on [' + local_time_str + '].',

'language': 'english',
'route': 'p',

# You can send sms to multiple numbers
# separated by comma.
'numbers': "9881999735,8788125817"
}

# create a dictionary
headers = {
'authorization': 'odWunz7kvgV0JphYtITZjLNlFHX1MS2ecw6ACRExba3iK5PfBQDdPwUQ4icWVsj1lvKM6RmGq027LOar',
'Content-Type': "application/x-www-form-urlencoded",
'Cache-Control': "no-cache"
}

# make a post request
response = requests.request("POST",url,data = my_data,headers = headers)

#load json data from source
returned_msg = json.loads(response.text)

# print the send message
# print(returned_msg['message'])