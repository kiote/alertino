# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"

  config.vm.network :private_network, ip: "192.168.33.16"
  config.vm.network :forwarded_port, host: 8880, guest: 8080
  config.vm.network :forwarded_port, host: 3366, guest: 3306

  config.vm.provider :virtualbox do |vb|
    vb.customize ["modifyvm", :id, "--name", "Alertino", "--memory", "512"]
  end

  # Shared folder from the host machine to the guest machine. Uncomment the line
  # below to enable it.
  config.vm.synced_folder ".", "/webapps/alertino"

  # Ansible provisioner.
  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "vagrant.yml"
    ansible.host_key_checking = false
    ansible.verbose = "v"
  end
end
