<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Contact Page' />

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Contact | <cms:get_custom_field 'site_name' masterpage='globals.php' /></title>
        <meta name="description" content="Contact Us">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<cms:show k_site_link />/css/styles.css">
    </head>
    <body>
        <div id="wrapper">
		
            <cms:embed 'header.html' />
			
            <div id="content">
                <!--[if lt IE 9]>
                    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
                <![endif]-->
                <h1>Contact Us</h1>
                <cms:editable name='address' label='Your Address' type='richtext'>
                    <p>Address</p>
                </cms:editable>
                <cms:if k_success>
                    <cms:if name2 || name3 != 'Please do not edit this text.'>
                        <p style="color: red;">You edited a field meant to trap spambots. If you're a human please try again and leave those fields untouched.</p>
                    <cms:else />
                        <p class="form-success">Thank you for contacting us. We will reply to you as soon as possible.</p>
                        <cms:send_mail from=k_email_from to=k_email_to subject="<cms:get_custom_field 'site_name' masterpage='globals.php' /> Contact Form">
                            <cms:show k_success />
                        </cms:send_mail>
                    </cms:if>
                </cms:if>

                <cms:form action='' method='post' id='contact-form'>
                    <ul>
                        <li class="hidden">
                            <cms:input type='text' name='name2' id='name2' />
                            <cms:input type='text' name='name3' id='name3' value='Please do not edit this text.' />
                        </li>
                        <li class="clearfix">
                            <label for="name">Name:</label>
                            <cms:input type='text' name='name' id='name' required='1' placeholder='Your Name...' />
                            <cms:if k_error_name>
                                <p class="error">Please enter your name.</p>
                            </cms:if>
                        </li>
                        <li class="clearfix">
                            <label for="email">Email:</label>
                            <cms:input type='text' name='email' id='email' required='1' validator='email' placeholder='Your Email...' />
                            <cms:if k_error_email>
                                <p class="error">Please enter a valid email address.</p>
                            </cms:if>
                        </li>
                        <li class="clearfix">
                            <label for="message">Message:</label>
                            <cms:input type='textarea' name='message' id='message' required='1' placeholder='Your Message...'></cms:input>
                            <cms:if k_error_message>
                                <p class="error">Please enter a message.</p>
                            </cms:if>
                        </li>
                        <li class="clearfix">
                            <label>&nbsp;</label>
                            <cms:input name="submit" type="submit" value="Send" />
                        </li>
                    </ul>
                </cms:form>
            </div>

            <cms:embed 'footer.html' />
            
        </div>
    </body>
</html>
<?php COUCH::invoke(); ?>