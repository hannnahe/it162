<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->

<div>	
    <fieldset>
        <legend>What Services Are You Interested In?</legend>
        <input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
        <input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
        <input type="checkbox" name="Interested_In[]" value="Web Consulting" /> Web Consulting <br />
        <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
    </fieldset>
</div>
<div>	
    <label>
        What is the purpose of your site?:<br />
        <select name="What_is_the_purpose?" required="required" title="What is the purpose is required" tabindex="30">
            <option value="">Choose One</option>
            <option value="Phone">Personal</option>
            <option value="Web">Business</option>
            <option value="Magazine">Creative Portfolio</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div>

    <div>	
    <label>
        What is your timeline for this project?:<br /><textarea name="InputSite" cols="36" rows="4" placeholder="A general estimate would be great, thanks!" tabindex="60"></textarea>
    </label>
</div>      
    <div>	
    <label>
        If you already have an exisiting site, please link here:<br /><textarea name="InputSite" cols="36" rows="4" placeholder="Or, if you have any sites that you would like to use as inspiration for a new site, link them here as well" tabindex="60"></textarea>
    </label>
</div>	
<div>	
    <label>
        Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Let me know anything else that you're thinking!" tabindex="60"></textarea>
    </label>
</div>	
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

