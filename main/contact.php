<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Contact Page' />
<cms:embed 'header1.html' />

    <title>Contact | <cms:get_custom_field 'site_name' masterpage='globals.php' /></title>
    <meta name="description" content="Contact Us" />
		
<cms:embed 'header2.html' />
			
<div id="content">
    <h1>Contact Us</h1>
    <cms:editable name='address' label='Your Address' type='richtext'>
        <p>Address</p>
    </cms:editable>

    <cms:if "<cms:get_flash 'success_msg' />" >
        <p class="form-success"><cms:get_flash 'success_msg' /></p>
    </cms:if>

    <cms:form action='' method='post' id='contact-form' class='form'>
        <cms:if k_success>
            <cms:if frm_name2 || frm_name3 != 'Please do not edit this text.'>
                <p class="error">You edited a field meant to trap spambots. If you're a human please try again and leave those fields untouched.</p>
            <cms:else />
                <cms:if "<cms:too_many_urls in='frm_message' allowed='1' />" >
                    <p class="error">Sorry. There are too many URLs in your message.</p>
                <cms:else/>
                    <cms:send_mail html='1' from=k_email_from to=k_email_to subject="<cms:get_custom_field 'site_name' masterpage='globals.php' /> Contact Form"> 
                        <p style="text-align: left;">
                            <b>Name:</b> <cms:show frm_name /><br />
                            <b>Email:</b> <cms:show frm_email /><br /><br />
                            <b>Message:</b><br />
                            <cms:show frm_message />
                        </p>
                    </cms:send_mail>

                    <cms:set_flash name='success_msg' value="Thank you for contacting us. We will reply to you as soon as possible." />
                    <cms:redirect k_page_link /> 
                </cms:if>
            </cms:if>
        </cms:if>
        <ul>
            <li class="hidden">
                <label for="name2">Please do not enter anything in this field.</label>
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
            <li class="clearfix checkbox">
                <p>Select your favorite cartoon characters.</p>
                <cms:input type="checkbox" name="toon" opt_values="Goofy | Donald | Bugs Bunny=Bugs | Scooby Doo=Scoob" />
            </li>
            <li class="clearfix">
                <label>&nbsp;</label>
                <cms:input name="submit" type="submit" value="Send" />
            </li>
        </ul>
    </cms:form>
</div>

<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>
