name: 🚀 Deploy to Reg.ru FTP

# Этот workflow запускается при каждом пуше в ветку main
on:
  push:
    branches: ["main"]

jobs:
  deploy:
    runs-on: ubuntu-latest

    steps:
      # 1. Скачиваем последнюю версию кода из репозитория
      - name: 🚚 Get latest code
        uses: actions/checkout@v4

      # 2. Загружаем файлы на хостинг через FTP
      - name: 📂 Sync files via FTP
        uses: SamKirkland/FTP-Deploy-Action@v4.3.5
        with:
          server: ${{ secrets.FTP_HOST }}
          username: ${{ secrets.FTP_USERNAME }}
          password: ${{ secrets.FTP_PASSWORD }}
          server-dir: ./www/site.ru/ # ПУТЬ К ПАПКЕ ВАШЕГО САЙТА!




          ----------------------------


          FTP_HOST
          FTP_USERNAME
          FTP_PASSWORD





          ----------------------------


          https://github.com/eugeneplug/репозиторий/settings/secrets/actions





-----------------------








name: 🚀 Deploy to SpaceWeb SFTP

on:
  push:
    branches: ["main"]

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - name: 🚚 Get latest code
        uses: actions/checkout@v4

      - name: 📂 Sync files via SFTP
        uses: milanmk/actions-file-deployer@master
        with:
          remote-protocol: "sftp"
          remote-host: ${{ secrets.SFTP_HOST }}      # IP или домен SpaceWeb
          remote-user: ${{ secrets.SFTP_USERNAME }}  # Логин SSH
          ssh-private-key: ${{ secrets.SFTP_KEY }}   # Приватный ключ
          local-path: "./"
          remote-path: "/home/t/tech1111/Manskiy/public_html"


-----------------------------






.github/workflows/deploy.yml














