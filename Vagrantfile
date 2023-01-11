Vagrant.configure(2) do |config|
  # https://vagrantcloud.com/ubuntu
  config.vm.box = "ubuntu"

  config.vm.synced_folder "C:/root/sayt/www", "/home/vagrant/www",owner: "vagrant", group: "vagrant", mount_options: ["dmode=777","fmode=777"]

  config.vm.network "private_network", ip: "192.168.33.11"

  # Forward ports
  config.vm.network "forwarded_port", guest: 80, host: 81 # web server
  # config.vm.network "forwarded_port", guest: 5432, host: 5432 # Postgres
  

  config.vm.provider "virtualbox" do |v|
    v.memory = 2096
  end

  # If true, then any SSH connections made will enable agent forwarding.
  config.ssh.forward_agent = true

  # Share additional folders to the guest VM.
  #config.vm.synced_folder "data", "/data"

  # Bash provision script
  #config.vm.provision "shell", path: "provision/setup.sh"

  # Upload user's ssh key into box so it can be used for downloading stuff from stash
  #ssh_key_path = "~/.ssh/"
  #config.vm.provision "shell", inline: "mkdir -p /home/vagrant/.ssh"
  #config.vm.provision "file", source: "#{ ssh_key_path + 'id_rsa' }", destination: "/home/vagrant/.ssh/id_rsa"
  #config.vm.provision "file", source: "#{ ssh_key_path + 'id_rsa.pub' }", destination: "/home/vagrant/.ssh/id_rsa.pub"

end