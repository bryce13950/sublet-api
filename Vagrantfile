#VAGRANTFILE_API_VERSION = "2"

Vagrant.configure("2") do |config|

    config.vm.provider :virtualbox do |vb|

        vb.customize ["modifyvm", :id, "--memory", "768"]
        vb.customize ["setextradata", :id, "VBoxInternal2/SharedFoldersEnableSymlinksCreate/v-root", "1"]

    end

    config.vm.define "forward", primary: true do |forward|

        forward.vm.box = "ubuntu/trusty64"
        forward.vm.box_url = "https://atlas.hashicorp.com/ubuntu/boxes/trusty64"


        config.vm.network :private_network, ip: '192.168.167.64'

        forward.vm.synced_folder "./code", "/web_root", :owner=> 'www-data', :group=>'www-data'

        config.vm.provision "ansible" do |ansible|

            ansible.extra_vars = {
                server_name: "axolotlinteractive.com",
                application_env: "development"
            }
            ansible.playbook = "ansible/playbook.yml"
        end

        if defined? VagrantPlugins::HostsUpdater
            config.hostsupdater.aliases = [
                "sublet.local"
            ]
        end
    end

#    config.vm.define "live" do |live|
#
#        live.vm.box = "digital_ocean"
#        live.vm.box_url = "https://github.com/smdahlen/vagrant-digitalocean/raw/master/box/digital_ocean.box"
#        live.vm.hostname = "debra.axolotlinteractive.com"
#
#        live.vm.synced_folder "./sites/", "/vagrant"
#
#        live.vm.provider :digital_ocean do |provider, override|
#            override.ssh.private_key_path = "~/.ssh/id_rsa"
#            provider.token = 'a8e7900a42fd6ef418ea2c7a3ee576722febf50e382b23279aae7c0c8f722e12'
#            provider.image = 'ubuntu-14-04-x64'
#            provider.region = 'nyc3'
#            provider.size = "512mb"
#        end
#
#        config.vm.provision "ansible" do |ansible|
#            ansible.extra_vars = {
#                server_name: "debra.axolotlinteractive.com",
#                application_env: "live"
#            }
#            ansible.playbook = "ansible/playbook.yml"
#        end
#
#    end
#
end
