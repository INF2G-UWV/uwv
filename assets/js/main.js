$(document).ready(function ()
{
    $("#index a:contains('Questions in order')").parent().addClass('active');
    $("#changeOrder a:contains('Change order')").parent().addClass('active');
    $("#signIn a:contains('Sign In')").parent().addClass('active');
    $("#signUp a:contains('Sign Up')").parent().addClass('active');

    $('ul.nav li.dropdown').hover(function() {
       $('.dropdown-menu', this).fadeIn();
    }, function(){
       $('.dropdown-menu', this).fadeOut('fast');
    });
});