# How to setup the website on a Linux VM

This README file will go through:

* Installing a Linux VM
* Downloading the website code from GitHub onto the Linux VM
* Downloading / setting up a local webserver on the Linux VM
* Downloading / setting up the local database (MySQL)
* Running the website on the local server
* Shell Script that automatically does it for you (OPTIONAL)

## Installing the Linux VM

This README **presumes that you already have a Linux virtual machine up and ready**, if not do the following:

- Follow the YouTube tutorial [Here](https://www.youtube.com/watch?v=hvkJv71PsCs&ab_channel=GaryExplains)

- To install the VM go to the [VirtualBox Website](https://www.virtualbox.org/wiki/Downloads), since we are
installing it on windows, click on windows host.

- Also be sure to download the Linux OS itself from [Here](https://www.kali.org/get-kali/#kali-platforms).

## Downloading the code from GitHub

* first open the terminal and install git with the following command: <br>

```sudo apt-get install git```

* Set up your Git account on the Linux VM with the following commands replacing the example with your account details: <br>

```git config --global user.name "John Doe" ```<br>
```git config --global user.email "johndoe@email.com"```

* Create a directory in your VM to install the code.

```mkdir ~/git```<br>
```cd ~/git```

* Install the code into the directory with the following command: <br>
```git clone https://github.com/rodigb/e-commerce_website.git```


