import telebot
from telebot import types
import openai
openai.api_key = "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"
api = '6118764453:AAH4Cv1WrS7n8nYfF01E34UdbouZt-ZYGaw'
bot = telebot.TeleBot(api)

def rsp(question):
    prmt = "Q: {qst}\nA:".format(qst=question)
    response = openai.Completion.create(
        model="text-davinci-003",
        prompt=prmt,
        temperature=0,
        max_tokens=500,
        top_p=1.0,
        frequency_penalty=0.0,
        presence_penalty=0.0
    )
    return response.choices[0].text
@bot.message_handler(commands=['start', 'help', 'about'])
def send_welcome(message):
 bot.send_message(message.chat.id, 'use /ask followed by a question or statement to generate a response')
 
@bot.message_handler(func=lambda message: True) 
def echo_message(message):
 msg = message.text
 #print(msg)
 response = rsp(msg)
 #print(response)
 bot.send_message(message.chat.id, response)
    
 
print('bot start running')
bot.polling()