<?php include "includes/header.php"?>
<p>The CSS flexbox layout method is a very popular method for arranging content that is, of course, flexible. It consists of the parent element (the flex container) and the child elements (the flex items). The flexbox method “aims at providing a more efficient way to lay out, align and distribute space among items in a container, even when their size is unknown and/or dynamic (thus the word “flex”)” (Coyier). </p>
<p>As Coyier writes, the “The main idea behind the flex layout is to give the container the ability to alter its items’ width/height (and order) to best fill the available space (mostly to accommodate to all kind of display devices and screen sizes). A flex container expands items to fill available free space or shrinks them to prevent overflow.”</p>
<p>The most significant aspect of the flexbox layout is that the direction of the layout isn’t necessarily defined, unlike block and inline layouts. The adjustability that the flexbox allows for makes it most useful for large or complex pages, “especially when it comes to orientation changing, resizing, stretching, shrinking, etc” (Coyier). </p>
<p>The properties for the parent elements (container) are many, but some of the most important are: display, flex-direction, flex-wrap, and flex-flow. For the child elements, properties such as order, flex-grow, flex-shrink, flex-basis, and align-self, are critical. 
It is also critical that the browser supports the flexbox layout method. <a href="https://caniuse.com/" target="_blank">Can I Use</a> is a very helpful site for a developer. It allows one to see which properties  each browser supports for the CSS flexbox. The ‘caniuse’ site, “includes all properties prefixed with flex, as well as display: flex, display: inline-flex, align-content, align-items, align-self, justify-content and order.”</p>
<p>One more helpful resource is: <a href="https://yoksel.github.io/flex-cheatsheet/" target="_blank">Yoksel's Flex Cheatsheet</a>. This shared page contains many examples and practice code to help even a beginner use the Flexbox method.</p>
    
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside class="citation box">
 <h3>Citations</h3>
 <p>Can I use... Support tables for HTML5, CSS3, etc. (2020). <a href="https://caniuse.com/flexbox" target="_blank">CanIUse Flexbox </a></p>
    <p>Coyier, Chris. (2020, October 22). A Complete Guide to Flexbox. CSS-Tricks. <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">Guide to Flexbox </a></p>
    <p>Yoksel. (2020). <a href="https://yoksel.github.io/flex-cheatsheet/" target="_blank">Flex Cheatsheet </a></p>
</aside>
<!-- END RIGHT COL -->
 <?php include "includes/footer.php"?>