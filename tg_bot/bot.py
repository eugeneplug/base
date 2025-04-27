
# pip install pyTelegramBotAPI - обязательно для установки библиотеки телебот

import telebot

TOKEN = "какой-то токен"  # Замените на реальный токен!

bot = telebot.TeleBot(TOKEN)

@bot.message_handler(commands=['start'])
def send_welcome(message):
    bot.reply_to(message, "🤖 Бот работает! (через telebot)")

@bot.message_handler(commands=['chat'])
def send_chat_id(message):
    bot.reply_to(message, f"🆔 ID чата: {message.chat.id}")

@bot.message_handler(commands=['token'])
def send_token(message):
    bot.reply_to(message, f"🔑 Токен бота: {TOKEN}")

print("Бот запущен...")
bot.polling()