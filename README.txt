#PHP environment

1.      Go to this link to download https://downloadsapachefriends.global.ssl.fastly.net/8.1.6/xampp-windows-x64-8.1.6-0-VS16-installer.exe?from_af=true XAMPP according to your OS and platform.

2.      Open the downloaded setup file. Follow the setup wizard and install XAMPP.

3.      Run XAMPP after the installation. Start MySQL and Apache server by clicking Start in front of it. (This has been practically done and explained in the video)

Note: If you face any issue while starting the servers in step 3 regarding Port 80, make sure port 80 is not being used by any other application such as Skype. You can check the port usage stats in the Resource Monitor of the windows OS.

Open a web browser, type localhost/phpMyAdmin in the address bar, and hit enter. The phpMyAdmin page will open, proving that the installed software and other things are working right. 

Let’s start creating our first Php website and gain some confidence. Before writing the code, it is important to understand few things about some of the files and folder structure created by XAMPP. When XAMPP is installed it creates a folder named XAMPP(By default in the C:// directory).

Inside the Xampp folder, there is a folder named htdocs which is something we will work with very frequently. This folder is home to all the websites we create using Xampp on our PC. A website is created by creating a folder inside the htdocs directory. htdocs contains several directories which contains main directories from all our websites. Here, "main directory" is the directory where all the files of a website are present.

place the sanvardhitbharat folder inside the htdocs folder.

#WEBXR REQUIREMENTS
 
To setup an environment capable of AR development using WebXR, you'll need:

A web server that serves resources in a secure context
A WebXR compatible browser on an ARCore supported device

Note: Android Emulator is not yet supported by WebXR.
Use a secure context
A secure context is a security mechanism that ensures that web resources have been transferred with a certain level of security. You'll need a secure context to provide a trusted XR experience with your new features.

In other to qualify as being served in a secure context, your resource must meet at least one of the following conditions:

The resource must be delivered over TLS (https://)
The resource must be requested through localhost or *.localhost.
Set up port forwarding
If you don't have a development server accessible over TLS, you can still develop in a secure context by using Chrome DevTools' Port forwarding. Port forwarding enables an Android device to access content hosted on the development machine's web server. It creates a listening TCP port on the Android device that maps to a TCP port on the development machine. Traffic can then travel through the USB connection between these two ports.

Follow these steps to set up port forwarding:

Follow the steps for Set up port forwarding in the Chrome DevTools instructions.
Ensure that the web server on the development workstation is running.
Verify that your connection works. Open Google Chrome on the Android device and browse to localhost on the port number specified in Port forwarding settings, for example, localhost:8000.
The resources on the web server should now be visible from the Android device. These resources are served in a Secure Context and can use WebXR capabilities.

Set up a supported device
AR experiences on Android can only be run on an ARCore supported device. Ensure that the device has Google Play Services for AR installed and enabled.

To verify that the device is correctly configured to run WebXR, browse to a sample WebXR page in a compatible browser.

Next steps


#UNITY WEBGL ENVIRONMENT FOR MONOSCOPIC EXPERIENCE IN WEB

to run virtual environments made from unity you need to do the server configuration for WebGL builds (Apache)
# This configuration file should be uploaded to the server as "<Application Folder>/Build/.htaccess"
# This configuration has been tested with Unity 2020.1 builds, hosted on Apache/2.4
# NOTE: "mod_mime" Apache module must be enabled for this configuration to work.
<IfModule mod_mime.c>

# The following lines are required for builds without decompression fallback, compressed with gzip
RemoveType .gz
AddEncoding gzip .gz
AddType application/octet-stream .data.gz
AddType application/wasm .wasm.gz
AddType application/javascript .js.gz
AddType application/octet-stream .symbols.json.gz

ALSO THERE ARE 2 APK FILES "ACADEMY THEATRE.apk" AND "GATEWAY.apk" FOR STEREOSCOPIC EXPERIENCE IN MOBILE WITH THE HELP OF VR BOX



