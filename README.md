# How to setup the website on a Linux VM

This README file will go through:

* Setting up both the local server as well as the database (XAMPP).
* Downloading the website code from GitHub onto the Linux VM
* Running the website on the local server
* Shell Script that automatically does it for you (OPTIONAL)

## Installing the Linux VM

This README **presumes that you already have a Linux virtual machine up and ready**, if not do the following:

- Follow the YouTube tutorial [Here](https://www.youtube.com/watch?v=hvkJv71PsCs&ab_channel=GaryExplains)

- To install the VM go to the [VirtualBox Website](https://www.virtualbox.org/wiki/Downloads), since we are
installing it on windows, click on windows host.

- Also be sure to download the Linux OS itself from [Here](https://www.kali.org/get-kali/#kali-platforms).

## Installing the local server and database

* Download the installation package from the official website [Here] (https://www.apachefriends.org/index.html)

* Once downloaded, move the installation package into the git directory we just created in the previous steps.
* Make the file executable by using the **chmod** command <br>
```chmod 755 [package name that you installed]```

*execute the file and start the installation with the following: 

```ls -l [package name]```

```sudo ./[package name]```

* To run XAMPP and get the local server ready use the following command:

```sudo /opt/lampp/lampp start```

* Start up both the Apache webserver and MySQL database [PICTURE?]

## Downloading the code from GitHub

* Open the terminal and install git with the following command: <br>

```sudo apt-get install git```

* Set up your Git account on the Linux VM with the following commands replacing the example with your account details: <br>

```git config --global user.name "John Doe" ```<br>
```git config --global user.email "johndoe@email.com"```

* Create a directory in your VM to install the code.

```mkdir ~/git```<br>
```cd ~/git```

* Install the code into the directory with the following command: <br>
```git clone https://github.com/rodigb/e-commerce_website.git```

## Moving the folder

* move the website folder into the opt folder where xampp was installed so you can access it on the web via htdocs with the following command:
```sudo mv /home/[user]/git /opt/lamp/htdocs ```

## Importing the database

* create a database, with the name ```webdb```
* once created click import databases and choose the sql file from the git folder you installed earlier.[pictures?]


NOTE: THIS WEBSITE HAS OUTDATED PHPMAILER AND IS OUTDATED ITSELF, NEW VERSION WILL BE UPLOADED SOON. FOR NOW AVOID REGESTERING AND LOG IN WITH THE FOLLOWING DETAILS:

Username: Test
Password: Test


