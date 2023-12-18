import tweepy
"""
ak ="ehFElJ4yKcBuiLrzWHSQVVxFt"

aks="3hzurSVNaNh2UqTwHyj1ziMfnTk4DEoj7UiPCXt07P8kIlP8T9"



#ccess Token and Access Token Secret 


#Access Token

at="1724763558595182592-UkBw012UsfTbg34K7KlDlw99EKPhmH"



#Access Token Secret 

ats="ZhLv7sQtbd9Hp2PGqcwQW9xtTsCnZIjc670hG02eg6800"



def OAuth ():
	try:
		auth = tweepy.OAuthHandler(ak,aks)
		auth.set_access_token(at,ats)
		return auth

	except Exception as e:
		return 	None
oauth=OAuth()

apicall = tweepy.API(oauth)

apicall.update_status("here is a sample tweet from the API call program neo is the king")

print("tweet created")
"""



client = tweepy.Client(consumer_key="3IuvFZdnW1uohbI4ajoCj4H2K",
                    consumer_secret="GtiCJ8gvGEYnWUxip2bWl9vcbbc0IDpc22Pk05wP5tcv4ne59A",
                    access_token="1724763558595182592-WCc8KD2MLCQklgPrrjfH45McLBY2SL",
                    access_token_secret="1f2Jthen3ybcyONF33wGf1MIyYi23t9q5Jx4SMI8UsIC2")
# Replace the text with whatever you want to Tweet about
response = client.create_tweet(text='here is a sample tweet2 from the API call program neo is the king')
print("tweet created")