# Dimater Payments plugin for Wordpress WooCommerce

## About
This is the offical Dimater Payments plugin.

Dimater Payments helps entrepreneurs with the best, smartest and most efficient payment systems. Both 
in your physical store and online in your webshop. With a wide range of payment methods 
you can serve every customer.

Why Dimater?

Via the Dimater website you can create a free test account online 24/7 and try out the online 
payment solution. Dimater's online solution also offers the option of sending payment links and 
accepting QR payments.

The ideal online payment page for your webshop:
- Free test account - available online 24/7
- Wide range of payment methods
- Easy integration via a plug-in or API
- Free shopping cart plug-ins
- Payment page in the look & feel of your webshop
- Reports in the formats CAMT.053, MT940S, MT940 & CODA
- One clear dashboard for all your payment, turnover data and administration functions

Promotion promotion extended!

Start immediately with your test account
Request it https://merchant.paygate.dipaygo.cloud/login

## Version number
Version x.x.x

## Pre-requisites to install the plug-ins 
* PHP v5.4 and above
* MySQL v5.4 and above

## Installation
Manual installation of the Dimater WooCommerce plugin using (s)FTP

1. Upload the folder 'dimater-woocommerce' in the ZIP file into the 'wp-content/plugins' folder of your WordPress installation.
You can use an sFTP or SCP program, for example, to upload the files. There are various sFTP clients that you can download free of charge from the internet, such as WinSCP or Filezilla.
2. Activate the EMS Online plugin in ‘Plugins’ > Installed Plugins.
3. Select ‘WooCommerce’ > ‘Settings’ > Payments and click on Dimater Payments (Enabled).
4. Configure the Dimater Payments module ('Manage' button)
- Copy the API key
- Select your preferred Failed payment page. This setting determines the page to which your customer is redirected after a payment attempt has failed. You can choose between the Checkout page (the page where you can choose a payment method) or the Shopping cart page (the page before checkout where the content of the shopping cart is displayed).
- Enable the cURL CA bundle option.
5. Configure each payment method you would like to offer in your webshop.
Enable only those payment methods that you applied for and for which you have received a confirmation from us.

Manual installation by uploading ZIP file from WordPress administration environment

1. Go to your WordPress admin environment. Upload the ZIP file to your WordPress installation by clicking on ‘Plugins’ > ‘Add New’. No files are overwritten.
2. Select ´Upload plugin´.
3. Select the dimater-woocommerce.zip file.
4. Continue with step 3 of Installation using (s)FTP.

Compatibility: WordPress 5.6 or higher