# b7webPHP

 Torne o arquivo executável com o comando abaixo;
 chmod +x xampp-installer.run
  Inicie a instalação do XAMPP, com o seguinte comando;
  sudo ./xampp-installer.run
   Se seu ambiente gráfico atual suportar e for de 64 bits, crie um lançador para o programa, executando o comando abaixo;
echo -e '[Desktop Entry]\n Version=1.0\n Name=xampp\n Exec=gksudo /opt/lampp/manager-linux-x64.run\n Icon=/opt/lampp/icons/world1.png\n Type=Application\n Categories=Application' | sudo tee /usr/share/applications/xampp.desktop

iniciar o programa
sudo /opt/lampp/manager-linux-x64.run 
