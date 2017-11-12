
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow mx-auto animated fadeIn">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation ">
    <span class="navbar-toggler-icon"></span>
  </button>
<a href="<?php echo base_url('main'); ?>" class=" navbar-brand text-light ml-2">
    <img src="/assets/img/logo.png" width="30" height="30" alt="">
</a>
 <button onclick="topFunction()" id="myBtn" title="Go to top">Top.</button>


<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
  <div class="collapse navbar-collapse" id="navbarSupportedContent ">
    <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         PHP
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('Learn#1'); ?>">What is PHP?</a>
          <a class="dropdown-item" href="<?php echo base_url('Learn#2'); ?>">What can PHP do?</a>
          <a class="dropdown-item" href="<?php echo base_url('Learn#3'); ?>">Simple tutorial</a>
          <a class="dropdown-item" href="<?php echo base_url('Learn#4'); ?>">First PHP-enabled Page</a>
            <a class="dropdown-item" href="<?php echo base_url('Learn#5'); ?>">Something Useful</a>
            <a class="dropdown-item" href="<?php echo base_url('Learn#6'); ?>">Dealing with Forms</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('Learn#php'); ?>">PHP</a>
        </div>
      </li>
       <li class="nav-item active">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         SQL
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('Learn#sql1'); ?>">What is SQL?</a>
           <a class="dropdown-item" href="<?php echo base_url('Learn#sql2'); ?>">What Can SQL do?</a>
         
          <a class="dropdown-item" href="<?php echo base_url('Learn#sql4'); ?>">Some of The Most Important SQL Commands</a>
          <a class="dropdown-item" href="<?php echo base_url('Learn#sql5'); ?>">SQL SELECT Statement</a>
            <a class="dropdown-item" href="<?php echo base_url('Learn#sql6'); ?>">SQL UPDATE Statement</a>
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('Learn#sql'); ?>">SQL</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Front-end
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('Learn#html'); ?>">HTML</a>
          <a class="dropdown-item" href="<?php echo base_url('Learn#css'); ?>">CSS</a>
          <a class="dropdown-item" href="<?php echo base_url('Learn#js'); ?>">JavaScript</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('Learn#footer'); ?>">Something else here</a>
        </div>
      </li>
    </ul>
    </div>
 </nav>


<div class="card text-center">
  <div class="card-header">
   Introduction to E-tool  </div>
  <div class="card-body" style="height:200px;">
    <div class="h-100 " style="background-color: black; width: 100%;">
      <h1  class="display-2  mx-auto animated fadeIn" style="font-size: 10vw;">Getting Started</h1>
    </div>
  </div>
</div>
<div class="Dashboard1">
	 <div class="container mx-auto ">
     <div class="row text-center shadow-super-light">
    <div class="col-md p-1">  
    <div class="p-5" style="background-color: white; width: 100%; height: 200px; ">
     <a class="nav-link display-2" href="<?php echo base_url('Learn#php'); ?>" id="navbarDropdown"  aria-expanded="false" style="font-size: 5vw; color:#3cabfc;">LEARN PHP</a> 
    </div>
    </div>
    <div class="col-md p-1 ">
    <div class="p-5" style="background-color: white; width: 100%; height: 200px;">
     <a class="nav-link display-2" href="<?php echo base_url('Learn#sql'); ?>" id="navbarDropdown"  aria-expanded="false" style="font-size: 5vw; color:#175A8B;">LEARN SQL</h1></a>
    </div>
    </div>
  </div>
  <div class="Dashboard">
  </div>
 <div class="card-header">
   <strong>To understand the back end,</strong>  or the “server side,” you also have to know the front end and how the two interact. The front end, also called “client-side” programming, is what happens in the browser—everything the end users see and interact with. The back end, on the other hand, happens on the server (on site, or in the cloud) and databases. It’s the machinery that works behind the scenes—everything the end user doesn’t see or directly interact with, but that powers what’s happening.
  </div>
 
  

  <div class="Dashboard">
    <div class="col-md">
  <div class="p-3 h-50" style="background-color: #f2f3f4; width: 100%; padding-left: 5px;"> Now, let’s take a look at how back-end architecture works—the software and machinery that take over in step four in the above graphic.</div>
</div>
  <div class="row mx-auto pt-2">
  <h4>BACK-END DEVELOPMENT & FRAMEWORKS IN SERVER SIDE SOFTWARE</h4>
  </div>


  <div class="row">
    <img class="img-responsive mx-auto d-block " style="height: 100%; width:100%;" src="/assets/img/backend_1.png">
  </div>
  <div class="row pt-3">
  <h4 style="font-weight:normal; font-size: 20px;">Let’s go a little further into these concepts by looking at some of the technologies that make it all run.</h4>
  </div>
   <div class="row pt-4 pb-3">
  <h4 style="font-weight:bold; font-size: 20px;">Breaking Down the Software Stack: The Basics of Back-End Tools & Technology</h4>
  </div>
   <div class="col-md">
  <div class="p-3 h-50" style="background-color: #FFFFFF; width: 100%; padding-left: 5px;"> Back-end development can be much more varied than front-end development, which is largely driven by JavaScript, HTML, CSS, and various front-end frameworks using these languages.</div>
 <div class="p-3 h-50" style="background-color: #FFFFFF; width: 100%; padding-left: 5px;"> 
To simplify things, we’ll break the server side down into four main components of a “software stack”: the server, the database, the operating system, and the software.</div>
 <div class="p-3 h-50" style="background-color: #FFFFFF; width: 100%; padding-left: 5px;"> 
Here’s some more information about each of these components of the backend.</div>
</div>
 <div class="row ">
    <img class="img-responsive mx-auto d-block " style="height: 100%; width:100%;" src="/assets/img/backend_2.png">
  </div>

    <img class="img-responsive mx-auto d-block " style="height: 100%; width:100%;" src="/assets/img/backend_2.1.png">
 
  <div class="row ">

    <img class="img-responsive mx-auto d-block " style="height: 100%; width:100%;" src="/assets/img/backend_3.png">
  </div>
  <div class="row pl-5">
    <img class="img-responsive mx-auto d-block " style="height: 100%; width:100%;" src="/assets/img/backend_3.1.png">
</div>
<div class="row">
    <img class="img-responsive mx-auto d-block " style="height: 100%; width:100%;" src="/assets/img/backend_4.png">
</div>


    <img class="img-responsive mx-auto d-block " style="height: 100%; width:100%;" src="/assets/img/backend_4.1.png">


    <img class="img-responsive mx-auto d-block " style="height: 100%; width:100%;" src="/assets/img/backend_5.png">


    <img class="img-responsive mx-auto d-block " style="height: 100%; width:100%;" src="/assets/img/backend_5.1.png">

    <img  class="img-responsive mx-auto d-block " style="height: 100%; width:100%;" src="/assets/img/backend_6.png">
      <div id="php" class="Dashboard p-4">

  </div>

  </div>

</div>

  <div  class="Dashboard">
  </div>

    <div  class="col-md">
   <div class="h-100 " style="background-color: black; width: 100%; padding-left: 10px;">
      <h1 id="sql1"  class="display-2  mx-auto animated fadeIn" style="font-size: 10vw;"><span style="color:#3d0101;">Start <span style="color:#680303;">with <span style="color:#8b1616;"> PHP.</h1>
    </div>
  </div>

   <div class="card-header">
   <div  class="display-4">What is PHP?</div>  
   <div><span style="color: red;"> PHP</span> is an HTML-embedded scripting language. Much of its syntax is borrowed from C, Java and Perl with a couple of unique PHP-specific features thrown in. The goal of the language is to allow web developers to write dynamically generated pages quickly.
  </div>
  <div class="Dashboard"></div>
  
   <div><span style="color: red;">PHP </span> (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.
  </div>
  <div class="card-header">
  <strong>What does it stand for?</strong>  
   <div>PHP stands for PHP: Hypertext Preprocessor. This confuses many people because the first word of the acronym is the acronym. This type of acronym is called a recursive acronym. 
  </div>
</div>
  <div class="Dashboard">
  </div>
  <div>Okay. But what does that mean?</div>
  </div>
   <div class="card-header">
   <strong>Example</strong>  
    <div class="Dashboard">
    </div>
   <div>Example #1 An introductory example
  </div>

  </div>
      </div>

      <div class="col-md">

      <img class="img-responsive mx-auto d-block " style="height: 100%; width:75%;" src="/assets/img/php_1.png">
    </div>
<div class="card-header text-justify">
   <strong></strong>  
   <div>Instead of lots of commands to output HTML (as seen in C or Perl), PHP pages contain HTML with embedded code that does "something" (in this case, output </div>
   <p><strong style="color: red;">"Hi, I'm a PHP script!
   </strong>"). The PHP code is enclosed in special start and end processing instructions < ?php and ?> that allow you to jump into and out of "PHP mode."
  </p>
<div class="card-header">
   
   <div>What distinguishes PHP from something like client-side JavaScript is that the code is executed on the server, generating HTML which is then sent to the client. The client would receive the results of running that script, but would not know what the underlying code was. You can even configure your web server to process all your HTML files with PHP, and then there's really no way that users can tell what you have up your sleeve.
  </div>
  <div class="Dashboard">
   <div>The best things in using PHP are that it is extremely simple for a newcomer, but offers many advanced features for a professional programmer. Don't be afraid reading the long list of PHP's features. You can jump in, in a short time, and start writing simple scripts in a few hours.
   </div>
  </div>
  <div id="2" class="Dashboard mb-3">
   <div>Although PHP's development is focused on server-side scripting, you can do much more with it. Read on, and see more in the What can PHP do? section, or go right to the <a href=""> introductory tutorial </a> if you are only interested in web programming.
   </div>

  </div>
  </div>
  <div class="Dashboard"> </div>
  <div class="Dashboard1 display-3">
    <div class="col-md">
    What can PHP do?
  </div>
   </div>  
  <div class="Dashboard1">
    <div class="col-md">
      <div class="card-header">
   <div><strong> Anything. </strong> PHP is mainly focused on server-side scripting, so you can do anything any other CGI program can do, such as collect form data, generate dynamic page content, or send and receive cookies. But PHP can do much more.
   </div>
   <div class="Dashboard">
   
    <div>There are three main areas where PHP scripts are used.</div>
 
  </div>
  <div class="Dashboard">
   
    <div>1. <strong>Server-side scripting.</strong> This is the most traditional and main target field for PHP. You need three things to make this work: the PHP parser (CGI or server module), a web server and a web browser. You need to run the web server, with a connected PHP installation. You can access the PHP program output with a web browser, viewing the PHP page through the server. All these can run on your home machine if you are just experimenting with PHP programming.</div>
 
  </div>
  <div class="Dashboard">
   
    <div>2. <strong>Command line scripting.</strong> You can make a PHP script to run it without any server or browser. You only need the PHP parser to use it this way. This type of usage is ideal for scripts regularly executed using cron (on *nix or Linux) or Task Scheduler (on Windows). These scripts can also be used for simple text processing tasks.</div>
 
  </div>
   <div class="Dashboard">
   
    <div>3. <strong>Writing desktop applications.</strong>  PHP is probably not the very best language to create a desktop application with a graphical user interface, but if you know PHP very well, and would like to use some advanced PHP features in your client-side applications you can also use PHP-GTK to write such programs. You also have the ability to write cross-platform applications this way. PHP-GTK is an extension to PHP, not available in the main distribution.</div>
 
  </div>

  
  </div>
   
 </div>
 <div class="Dashboard1 mx-auto "> 
   <div class="col-md p-3"> 
    <div>PHP can be used on all major operating systems, including Linux, many Unix variants (including HP-UX, Solaris and OpenBSD), Microsoft Windows, Mac OS X, RISC OS, and probably others. PHP also has support for most of the web servers today. This includes Apache, IIS, and many others. And this includes any web server that can utilize the FastCGI PHP binary, like lighttpd and nginx. PHP works as either a module, or as a CGI processor.</div> 
  </div>
  <div class="col-md p-3"> 
    <div>So with PHP, you have the freedom of choosing an operating system and a web server. Furthermore, you also have the choice of using procedural programming or object oriented programming (OOP), or a mixture of them both.</div> 
  </div>
   <div class="col-md p-3"> 
    <div>With PHP you are not limited to output HTML. PHP's abilities includes outputting images, PDF files and even Flash movies (using libswf and Ming) generated on the fly. You can also output easily any text, such as XHTML and any other XML file. PHP can autogenerate these files, and save them in the file system, instead of printing it out, forming a server-side cache for your dynamic content.</div> 
  </div>
  <div class="col-md p-3"> 
    <div>One of the strongest and most significant features in PHP is its support for a wide range of databases. Writing a database-enabled web page is incredibly simple using one of the database specific extensions (e.g., for mysql), or using an abstraction layer like PDO, or connect to any database supporting the Open Database Connection standard via the ODBC extension. Other databases may utilize cURL or sockets, like CouchDB.</div> 
  </div>
    <div class="col-md p-3"> 
    <div>PHP has useful text processing features, which includes the Perl compatible regular expressions (PCRE), and many extensions and tools to parse and access XML documents. PHP standardizes all of the XML extensions on the solid base of libxml2, and extends the feature set adding SimpleXML, XMLReader and XMLWriter support.</div> 
  </div>
  <div id="3" class="col-md p-3"> 
    <div>And many other interesting extensions exist, which are categorized both alphabetically and by category. And there are additional PECL extensions that may or may not be documented within the PHP manual itself, like » XDebug.</div> 

  </div>

  </div>
  </div>
  <div class="Dashboard"></div>
  <div class="Dashboard1 display-2">

  <div class="col-md">
    A simple tutorial.
  </div>
   </div>  

  <div class="Dashboard1">
    <div class="col-md">
      <div class="card-header">
   <div>In this tutorial we assume that your server has activated support for PHP and that all files ending in .php are handled by PHP. On most servers, this is the default extension for PHP files, but ask your server administrator to be sure. If your server supports PHP, then you do not need to do anything. Just create your .php files, put them in your web directory and the server will automatically parse them for you. There is no need to compile anything nor do you need to install any extra tools. Think of these PHP-enabled files as simple HTML files with a whole new family of magical tags that let you do all sorts of things.
   </div>
   <div class="Dashboard">
   
    <div>Let us say you want to save precious bandwidth and develop locally. In this case, you will want to install a web server, such as » Apache, and of course » PHP. You will most likely want to install a database as well, such as » MySQL.</div>
 
  </div>
  <div class="Dashboard">
   
    <div>You can either install these individually or choose a simpler way. Our manual has installation instructions for PHP (assuming you already have some web server set up). If you have problems with installing PHP yourself, we would suggest you ask your questions on our » installation mailing list. If you choose to go on the simpler route, then » locate a pre-configured package for your operating system, which automatically installs all of these with just a few mouse clicks. It is easy to setup a web server with PHP support on any operating system, including MacOSX, Linux and Windows. On Linux, you may find » rpmfind and » PBone helpful for locating RPMs. You may also want to visit » apt-get to find packages for Debian.</div>
  </div>
      </div>
   </div>
 <div class="Dashboard1 mx-auto "> 
   <div id="4" class="col-md p-3"> 
    <div></div> 
  </div>
  </div>  
 </div>
    
<div class="Dashboard"></div>
  <div class="Dashboard1 display-3">

  <div class="col-md">
    Your first PHP-enabled Page.
  </div>
   </div>  
<div class="Dashboard1">
  <div class="col-md">
    
   <div>Create a file named hello.php and put it in your web server's root directory (DOCUMENT_ROOT) with the following content:
   </div>
  </div>
  <div class="Dashboard"></div>
  <div class="col-md">
    
   <div><strong>Example #1</strong> Our first PHP script: <strong style="color: red;"> hello.php</strong> </div>


  </div>


  <div class="Dashboard"></div>
  <div class="col-md">

      <img class="img-responsive mx-auto d-block " style="height: 100%; width:75%;" src="/assets/img/php_2.png">
  </div>
  

<div class="Dashboard"></div>
   <div class="col-md">
    
   <div>Use your browser to access the file with your web server's URL, ending with the /hello.php file reference. When developing locally this URL will be something like http://localhost/hello.php or http://127.0.0.1/hello.php but this depends on the web server's configuration. If everything is configured correctly, this file will be parsed by PHP and the following output will be sent to your browser:
   </div>
  </div>
  <div class="Dashboard"></div>
 <div class="col-md">

      <img class="img-responsive mx-auto d-block " style="height: 100%; width:75%;" src="/assets/img/php_3.png">
 </div>

<div class="Dashboard"></div>
   <div class="col-md">
    
   <div>This program is extremely simple and you really did not need to use PHP to create a page like this. All it does is display: Hello World using the PHP echo statement. Note that the file does not need to be executable or special in any way. The server finds out that this file needs to be interpreted by PHP because you used the ".php" extension, which the server is configured to pass on to PHP. Think of this as a normal HTML file which happens to have a set of special tags available to you that do a lot of interesting things.
   </div>
  </div>

  <div class="Dashboard"></div>
   <div class="col-md">
    
   <div>If you tried this example and it did not output anything, it prompted for download, or you see the whole file as text, chances are that the server you are on does not have PHP enabled, or is not configured properly. Ask your administrator to enable it for you using the Installation chapter of the manual. If you are developing locally, also read the installation chapter to make sure everything is configured properly. Make sure that you access the file via http with the server providing you the output. If you just call up the file from your file system, then it will not be parsed by PHP. If the problems persist anyway, do not hesitate to use one of the many » PHP support options.
   </div>
  </div>

  <div class="Dashboard"></div>
   <div class="col-md">
    
   <div>The point of the example is to show the special PHP tag format. In this example we used < ? php to indicate the start of a PHP tag. Then we put the PHP statement and left PHP mode by adding the closing tag, ?>. You may jump in and out of PHP mode in an HTML file like this anywhere you want. For more details, read the manual section on the basic PHP syntax.
   </div>
   <div class="Dashboard"></div>
  <div class="col-md"> 
   <div><strong>Example #2</strong>  Get system information from PHP</div>
  </div>  
  </div>
  
</div>
 <div class="Dashboard"></div>

   <div class="col-md">
      <img  id="5" class="img-responsive mx-auto d-block " style="height: 100%; width:75%;" src="/assets/img/php_4.png">
  </div>

<div class="Dashboard"></div>
  <div class="Dashboard1 display-3">

  <div class="col-md">
    Something Useful.
  </div>
   </div>  
  <div class="Dashboard1">
  <div class="col-md">
    
   <div>Let us do something more useful now. We are going to check what sort of browser the visitor is using. For that, we check the user agent string the browser sends as part of the HTTP request. This information is stored in a variable. Variables always start with a dollar-sign in PHP. The variable we are interested in right now is $_SERVER['HTTP_USER_AGENT'].
   </div>
  </div>
  <div class="Dashboard">
  <div class="col-md ">
    <div class="card-header">
    
   <div>Note:$_SERVER is a special reserved PHP variable that contains all web server information. It is known as a superglobal. These special variables were introduced in PHP » 4.1.0. Before this time, we used the older $HTTP_*_VARS arrays instead, such as $HTTP_SERVER_VARS. As of PHP 5.4.0 these older variables have been removed. (See also the note on old code.) </div>
  </div>
</div>
<div class="Dashboard">
  <div class="col-md ">
  
    
   <div>To display this variable, you can simply do: </div>
  </div>
</div>
<div class="Dashboard">
  <div class="col-md ">
  
    
   <div><strong>Example #1</strong> Printing a variable (Array element)</div>
  </div>
</div>

  <div class="Dashboard"></div>
  <div class="col-md">

      <img class="img-responsive mx-auto d-block " style="height: 100%; width:75%;" src="/assets/img/php_5.png">
  </div>
  

<div class="Dashboard"></div>
   <div class="col-md">
    
   <div>A sample output of this script may be:
   </div>
  </div>
  
<div class="Dashboard"></div>
  <div class="col-md">

      <img class="img-responsive mx-auto d-block " style="height: 100%; width:75%;" src="/assets/img/php_6.png">
  </div>

<div class="Dashboard"></div>
   <div class="col-md">
    
   <div>There are many types of variables available in PHP. In the above example we printed an Array element. Arrays can be very useful.
   </div>
  </div>
<div class="Dashboard"></div>
   <div class="col-md">
    
   <div>$_SERVER is just one variable that PHP automatically makes available to you. A list can be seen in the Reserved Variables section of the manual or you can get a complete list of them by looking at the output of the phpinfo() function used in the example in the previous section.
   </div>
  </div>

<div class="Dashboard"></div>
   <div class="col-md">
    
   <div>You can put multiple PHP statements inside a PHP tag and create little blocks of code that do more than just a single echo. For example, if you want to check for Internet Explorer you can do this:
   </div>
  </div>

<div class="Dashboard">
  <div class="col-md ">
  
    
   <div><strong>Example #2</strong>  Example using control structures and functions</div>
  </div>
</div>


  <div class="Dashboard"></div>
  <div class="col-md">

      <img class="img-responsive mx-auto d-block " style="height: 100%; width:75%;" src="/assets/img/php_7.png">
  </div>
  

<div class="Dashboard"></div>
   <div class="col-md">
    
   <div>A sample output of this script may be:
   </div>
  </div>
  
<div class="Dashboard"></div>
  <div class="col-md">

      <img class="img-responsive mx-auto d-block " style="height: 100%; width:75%;" src="/assets/img/php_8.png">
  </div>

<div class="Dashboard"></div>
   <div class="col-md">
    
   <div>Here we introduce a couple of new concepts. We have an if statement. If you are familiar with the basic syntax used by the C language, this should look logical to you. Otherwise, you should probably pick up an introductory PHP book and read the first couple of chapters.
   </div>
  </div>

<div class="Dashboard"></div>
   <div class="col-md">
    
   <div>The second concept we introduced was the strpos() function call. strpos() is a function built into PHP which searches a string for another string. In this case we are looking for 'MSIE' (so-called needle) inside $_SERVER['HTTP_USER_AGENT'] (so-called haystack). If the needle is found inside the haystack, the function returns the position of the needle relative to the start of the haystack. Otherwise, it returns FALSE. If it does not return FALSE, the if expression evaluates to TRUE and the code within its {braces} is executed. Otherwise, the code is not run. Feel free to create similar examples, with if, else, and other functions such as strtoupper() and strlen(). Each related manual page contains examples too.
   </div>
  </div>
<div class="Dashboard"></div>
   <div class="col-md">
    
   <div>We can take this a step further and show how you can jump in and out of PHP mode even in the middle of a PHP block:
   </div>
  </div>
<div class="Dashboard">
  <div class="col-md ">
  
    
   <div><strong>Example #3</strong>  Mixing both HTML and PHP modes</div>
  </div>
</div>

<div class="Dashboard"></div>
  <div class="col-md">

      <img class="img-responsive mx-auto d-block " style="height: 100%; width:75%;" src="/assets/img/php_9.png">
  </div>

<div class="Dashboard"></div>
  <div class="col-md">
  <div>A sample output of this script may be:</div>
  </div>
</div>

<div class="Dashboard"></div>
  <div class="col-md">

      <img class="img-responsive mx-auto d-block " style="height: 100%; width:75%;" src="/assets/img/php_10.png">
  </div>

<div class="Dashboard"></div>
  <div class="col-md">
  <div id="6" >Instead of using a PHP echo statement to output something, we jumped out of PHP mode and just sent straight HTML. The important and powerful point to note here is that the logical flow of the script remains intact. Only one of the HTML blocks will end up getting sent to the viewer depending on the result of strpos(). In other words, it depends on whether the string MSIE was found or not.</div>
  </div>
</div>

<div class="Dashboard"></div>
  <div class="Dashboard1 display-3">

  <div class="col-md">
    Dealing with Forms.
  </div>
   </div>  
  <div class="Dashboard1">
  <div class="col-md">
    <div class="card-header">
   <div>One of the most powerful features of PHP is the way it handles HTML forms. The basic concept that is important to understand is that any form element will automatically be available to your PHP scripts. Please read the manual section on Variables from external sources for more information and examples on using forms with PHP. Here is an example HTML form:
   </div>
  </div>
  
<div class="Dashboard">
  <div class="col-md ">
  
    
   <div><strong>Example #1</strong> A simple HTML form</div>
  </div>
</div>


  <div class="Dashboard"></div>
  <div class="col-md">

      <img class="img-responsive mx-auto d-block " style="height: 100%; width:75%;" src="/assets/img/php_11.png">
  </div>
  

<div class="Dashboard">
  <div class="col-md ">
  
    
   <div>There is nothing special about this form. It is a straight HTML form with no special tags of any kind. When the user fills in this form and hits the submit button, the action.php page is called. In this file you would write something like this:</div>
  </div>
</div>

<div class="Dashboard">
  <div class="col-md ">
  
    
   <div><strong>Example #2</strong> Printing data from our form</div>
  </div>
</div>

<div class="Dashboard"></div>
  <div class="col-md">

      <img class="img-responsive mx-auto d-block " style="height: 100%; width:75%;" src="/assets/img/php_12.png">
  </div>

<div class="Dashboard">
  <div class="col-md ">
  
    
   <div>A sample output of this script may be:</div>
  </div>
</div>

<div class="Dashboard"></div>
  <div class="col-md">

      <img class="img-responsive mx-auto d-block " style="height: 100%; width:75%;" src="/assets/img/php_13.png">
  </div>

<div class="Dashboard">
  <div class="col-md ">
  
    
   <div>Apart from the htmlspecialchars() and (int) parts, it should be obvious what this does. htmlspecialchars() makes sure any characters that are special in html are properly encoded so people can't inject HTML tags or Javascript into your page. For the age field, since we know it is a number, we can just convert it to an integer which will automatically get rid of any stray characters. You can also have PHP do this for you automatically by using the filter extension. The $_POST['name'] and $_POST['age'] variables are automatically set for you by PHP. Earlier we used the $_SERVER superglobal; above we just introduced the $_POST superglobal which contains all POST data. Notice how the method of our form is POST. If we used the method GET then our form information would live in the $_GET superglobal instead. You may also use the $_REQUEST superglobal, if you do not care about the source of your request data. It contains the merged information of GET, POST and COOKIE data.</div>
  </div>
</div>
<div class="Dashboard">
  <div class="col-md ">
  
    
   <div>You can also deal with XForms input in PHP, although you will find yourself comfortable with the well supported HTML forms for quite some time. While working with XForms is not for beginners, you might be interested in them. </div>
  </div>
</div>



 <div class="Dashboard1 mx-auto "> 
   <div id="sql" class="col-md p-3"> 
    <div></div> 

  </div>
  </div>

 </div>

  </div>

  </div>

</div>

  
  </div>

  </div>

 </div>


<div  class="Dashboard1">
  </div>
  

    <div class="col-md">
   <div class="h-100 " style="background-color: black; width: 100%; padding-left: 10px;">
      <h1 id="sql1"  class="display-2  mx-auto animated fadeIn" style="font-size: 10vw;"><span style="color:#00233d;">Start <span style="color:#09385b;">with <span style="color:#175A8B;">SQL.</h1>
    </div>
  </div>

<div class="card-header">
  <div class="display-3">
    <strong>What is SQL?</strong> 
  </div>   
   <div class="Dashboard"></div>
   <div class="col-md">
   <div><span style="color: #1199ff;"> SQL</span> <strong> is a standard language for storing, manipulating and retrieving data in databases.generated pages quickly. </strong>
  </div>
  <div class="Dashboard"></div>
   <div><span style="color: #1199ff;"> SQL</span> stands for Structured Query Language
  </div>
  <div class="Dashboard"></div>
   <div><span style="color: #1199ff;"> SQL</span>  lets you access and manipulate databases
  </div>
</div>
  <div class="Dashboard"></div>
  
   <div class="card-header">
   <strong>Example</strong>  
    <div class="Dashboard">
    </div>
    <div class="card-header" style="font-size: 30px;">
   SQL Statement: 
   
  <div class="col-md">

      <img class="img-responsive mx-auto d-block " style="height: 100%; width:75%;" src="/assets/img/sql_1.png">
  </div>

  </div>
      <div class="Dashboard">
    </div>
    <div class="card-header" style="font-size: 30px;">
   Your Database: 
   
  <div class="col-md">

      <img class="img-responsive mx-auto d-block " style="" src="/assets/img/sql_2.png">
  </div>

  </div>
          <div class="Dashboard">
    </div>
    <div class="card-header" style="font-size: 30px;">
   Result: 
   
  <div class="col-md">

      <img  class="img-responsive mx-auto d-block " style="height: 100%; width:75%;" src="/assets/img/sql_3.png">
  </div>
<div class="Dashboard" id="sql2" >
    </div>
  </div>
 

      </div>
    <div  class="Dashboard">
 <div class="display-2">
    <strong>What Can SQL do?</strong> 
  </div>   
   <div class="Dashboard"></div>
   <div class="col-md">
   <div><span style="color: #1199ff;"> SQL</span> can execute queries against a database </strong>
  </div>
  <div class="Dashboard"></div>
   <div><span style="color: #1199ff;"> SQL</span> can retrieve data from a database
  </div>
  <div class="Dashboard"></div>
   <div><span style="color: #1199ff;"> SQL</span> can insert records in a database
  </div>
  <div class="Dashboard"></div>
  <div><span style="color: #1199ff;"> SQL</span> can update records in a database</strong>
  </div>
  <div class="Dashboard"></div>
   <div><span style="color: #1199ff;"> SQL</span> can delete records from a database
  </div>
  <div class="Dashboard"></div>
   <div><span style="color: #1199ff;"> SQL</span> can create new databases
  </div>
   <div class="Dashboard"></div>
  <div><span style="color: #1199ff;"> SQL</span> can create new tables in a database
  </strong>
  </div>
  <div class="Dashboard"></div>
   <div><span style="color: #1199ff;"> SQL</span> can create stored procedures in a database
  </div>
  <div class="Dashboard"></div>
   <div><span style="color: #1199ff;"> SQL</span> can create views in a database
  </div>
  <div class="Dashboard"></div>
   
   <div><span style="color: #1199ff;"> SQL</span> can set permissions on tables, procedures, and views</strong>
  </div>
  <div class="Dashboard"></div>
   <div><span style="color: #1199ff;"> SQL</span>can delete records from a database
  </div>
  <div class="Dashboard"></div>
   <div><span  style="color: #1199ff;"> SQL</span>can create new databases
  </div>
</div>
      </div>
      </div>
<div class="Dashboard"></div>
<div class="card-header">
  <div class="display-4">
    <strong>SQL Statements.</strong> 
  </div>   
   <div class="Dashboard"></div>
   <div class="col-md">
   <div>Most of the actions you need to perform on a database are done with SQL statements.</strong>
       <div class="Dashboard"></div>
   <div class="card-header">

    <strong>Keep in Mind That</strong>
    <div> SQL keywords are NOT case sensitive: select is the same as SELECT</div>
  </div>   
</div>
</div>
<div class="Dashboard"></div>
<div class="display-4">
     <div class="Dashboard"></div>
    <strong>Semicolon after SQL Statements?</strong> 
  </div>  

<div class="Dashboard"></div>
  
   <div>Some database systems require a semicolon at the end of each SQL statement.</div>

<div id="sql4"  class="Dashboard"></div>
   <div>Semicolon is the standard way to separate each SQL statement in database systems that allow more than one SQL statement to be executed in the same call to the server.</div>

</div>
</div>
</div>
</div>
<div class="Dashboard"></div>
<div class="Dashboard1">
<div class="col-md">
<div class="display-4">
    <strong>Some of The Most Important SQL Commands.</strong> 
  </div>  
<div class="Dashboard1"> 
<div class="col-md">

      <img  class="img-responsive mx-auto d-block p-5 " style="height: 50%; width:50%;" src="/assets/img/sql_4.png"><div  id="sql5" class="Dashboard"> </div>  

  </div>
</div>
</div>
 <div class="Dashboard">
 <div class="display-4">
  <div class="col-md">
    <strong>SQL SELECT Statement.</strong> 
  </div>   
</div>
<div class="col-md">
   <div class="Dashboard"></div>

   <div class="col-md">
   <h2>The SQL SELECT Statement </h2>
  </div>
  <div class="col-md">
  <div class="Dashboard"></div>
  <div class="col-md">
   <div>The SELECT statement is used to select data from a database.</div>
</div>
<div class="Dashboard"></div>
<div class="col-md">
   <div>The data returned is stored in a result table, called the result-set.</div>
</div>
<div class="Dashboard"></div>

   <div class="col-md">
   <h2>SELECT Syntax</h2>
  </div>
<div class="Dashboard1"> 
<div class="col-md">
  <div class="card-header">
      <img class="img-responsive mx-auto d-block p-5 " style="height: 100%; width:100%;" src="/assets/img/sql_5.png">
 </div>

  </div>
</div>
<div class="Dashboard"></div>
<div class="Dashboard"></div>

   <div class="col-md">
   <h2>Demo Database</h2>
  </div><div class="col-md">
  <div class="Dashboard"></div>
   <div><strong>Below is a selection from the "Customers" table in the Northwind sample database:</strong>
<div class="Dashboard">
<div class="col-md">
<div class="card-header">

      <img class="img-responsive mx-auto d-block p-5 " style="height: 100%; width:100%;" src="/assets/img/sql_7.png">
  </div>
</div>
</div>
</div>
</div>
<div class="Dashboard"></div>

   <div class="col-md">
   <h2>SELECT Column Example</h2>
<div class="Dashboard"></div>
</div> <div class="col-md"
   <div><strong>The following SQL statement selects the "CustomerName" and "City" columns from the "Customers" table:</strong>
   </div>
<div class="Dashboard">
<div class="col-md">
<div class="card-header">
  <div class="Dashboard">
<div class="col-md">
   <h2>SQL Statement:</h2>
      <img class="img-responsive mx-auto d-block p-5 " style="height: 100%; width:100%;" src="/assets/img/sql_8.png">
    </div>
  </div>
  <div class="col-md">

   <h2>Result:</h2>
      <img class="img-responsive mx-auto d-block " style="height: 100%; width:100%;" src="/assets/img/sql_9.png">
    </div>
   <div id="sql6"  class="Dashboard"></div>
 
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
   <div class="Dashboard"></div>
   <div class="Dashboard">
 <div class="display-4">
  <div class="col-md">
    <strong>SQL UPDATE Statement.</strong> 
  </div>   
</div>
<div class="Dashboard"></div>
</div> 
<div class="col-md">
  <div class="col-md">
   <div>The UPDATE statement is used to modify the existing records in a table.</div>
   </div>
 </div>
<div class="Dashboard"></div>
</div> 
<div class="col-md">
  <div class="col-md">
   <h3></h3>
   </div>
 </div>
<div class="Dashboard">
<div class="col-md">
<div class="card-header">
   <h2>UPDATE Syntax</h2>
      <img class="img-responsive mx-auto d-block " style="height: 100%; width:80%;" src="/assets/img/sql_10.png"></div>
 </div>
</div>
</div>
<div></div>
<div class="Dashboard">
<div class="col-md">
<div class="card-header">
   <h2>Demo Database</h2>
      <img class="img-responsive mx-auto d-block " style="height: 100%; width:50%;" src="/assets/img/sql_11.png"></div>
    </div>
</div>

<div class="Dashboard">
<div class="col-md">
<div class="card-header">
   <h2>UPDATE Table</h2>
   <div class="col-md">
   <div>The following SQL statement updates the first customer (CustomerID = 1) with a new contact person and a new city.</div>
   </div>
   <div class="Dashboard">
   <div class="col-md">
    <h3> SQL Statement: </h3>
      <img class="img-responsive mx-auto d-block " style="height: 100%; width:100%;" src="/assets/img/sql_12.png"></div>
    </div>
    <div class="Dashboard">
<div class="col-md">
   <h2>Result:</h2>
   <div class="col-md">
      <img class="img-responsive mx-auto d-block  " style="height: 100%; width:100%;" src="/assets/img/sql_13.png">
  </div>
  </div>
  </div>
</div>  
</div>
</div>

 </div>
<div class="Dashboard">
<div class="col-md">

  <div class="Dashboard">
<div class="col-md">
   <h2>SQL Statement:</h2>
      <img class="img-responsive mx-auto d-block p-5 " style="height: 100%; width:100%;" src="/assets/img/sql_13.png">
  
  </div>
  <div class="col-md">
    
   <h2>Result:</h2>
      <img class="img-responsive mx-auto d-block " style="height: 100%; width:100%;" src="/assets/img/sql_9.png">
    </div>
    
  </div></div>
</div>



</div>
</div>
</div>
</div>
</div>

</div>

   <div class="Dashboard"></div>
   <div class="Dashboard"> 
      <div class="col-md">



    <div class="col-md">
   <div class="h-100 " style="background-color: White; width: 100%; padding-left: 20px;">
      <h1 id="sql1"  class="display-2  mx-auto animated fadeIn" style="font-size: 8vw;"><span style="color:#00233d;">HTML. <span style="color:#09385b;">CSS. <span style="color:#175A8B;">JavaScript. </h1>
    </div>
  </div>
</div>
<div  id="html" class="Dashboard pt-5"></div>
<div class="Dashboard">
<div class="card-header">
  <div class="display-3"> <div class="col-md">
    <strong>Html?</strong> 
  </div>
  </div>

 
   <div class="col-md p-5">
   <div><span style="color: #1199ff;"> HTML </span> <strong> is the standard markup language for creating Web pages. </strong>
  </div><div class="Dashboard "></div>


   <div>HTML stands for Hyper Text Markup Language </strong>
  </div>
  <div class="Dashboard"></div>
   <div> HTML describes the structure of Web pages using markup
  </div>
  <div class="Dashboard"></div>
   <div>HTML elements are the building blocks of HTML pages
  </div>
  <div class="Dashboard"></div>
  <div> HTML elements are represented by tags
</strong>
  </div>
  <div class="Dashboard"></div>
   <div> HTML tags label pieces of content such as "heading", "paragraph", "table", and so on

  </div>
  <div class="Dashboard"></div>
   <div> Browsers do not display the HTML tags, but use them to render the content of the page
  </div>
 

</div>
  <div class="display-3"> <div class="col-md">
    <strong>A Simple HTML Document.</strong> 
  </div>
  </div>

 
   <div class="col-md p-5">
   <div><span style="color: #1199ff;"> HTML </span> <strong> is the standard markup language for creating Web pages. </strong>
  </div><div class="Dashboard "></div>
  <div class="Dashboard">
<div class="col-md">
<div class="card-header">
   <h2>Example</h2>
      <img class="img-responsive mx-auto d-block " style="height: 50%; width:50%;" src="/assets/img/html_1.png"></div>
    </div>
</div>
<div class="Dashboard">
<div class="col-md">
<div class="card-header">
   <h2>Output</h2>
      <img class="img-responsive mx-auto d-block " style="height: 50%; width:50%;" src="/assets/img/html_2.png"></div>
    </div>
</div>
  </div>
  <div class="Dashboard">
<div class="col-md">
 <div class="display-4"> 
    <strong>Example Explained.</strong> 
  </div>
  </div>
</div>
<div class="Dashboard">
<div class="col-md">
    <div>The < !DOCTYPE html> declaration defines this document to be HTML5 </strong>
  </div>
  <div class="Dashboard"></div>
   <div> The < html> element is the root element of an HTML page
  </div>
  <div class="Dashboard"></div>
   <div>The < head> element contains meta information about the document
  </div>
  <div class="Dashboard"></div>
  <div> The < body> element contains the visible page content
</strong>
  </div>
  <div class="Dashboard"></div>
   <div> The < h1> element defines a large heading </div>
  <div class="Dashboard"></div>
   <div>The < p> element defines a paragraph </div>
 




</div>
 <div class="Dashboard"></div>
<div class="display-3"> 
    <strong>HTML Tags.</strong> 

  </div>
  <div class="Dashboard"></div>
  <div class="col-md">
   <strong> HTML tags are element names surrounded by angle brackets </strong></div></div>
  <div class="Dashboard"></div>
  <div class="col-md">
   <div>HTML tags normally come in pairs like < p> and < /p></div>
<div>The first tag in a pair is the start tag, the second tag is the end tag</div>
<div>The end tag is written like the start tag, but with a forward slash inserted before the tag</div> name</div></div>
  </div>

</div>
  <div class="Dashboard"></div>
<div class="display-3"> 
    <div class="col-md"></div>
   
    <div class="Dashboard"></div>
  <div class="col-md"> <div>Web Browsers.</div> 
</div>
  </div>
  <div class="Dashboard"></div>
  <div class="col-md">
 <div class="col-md">
   <div>The purpose of a web browser (Chrome, IE, Firefox, Safari) is to read HTML documents and display them.</div></div>
   <div class="col-md">
<div>The browser does not display the HTML tags, but uses them to determine how to display the document:</div></div>
 <div class="col-md">

<div  id="css" class="Dashboard pt-5"></div>

<div class="Dashboard">
<div class="card-header">
  <div class="display-1"> <div class="col-md">
    <strong>CSS?</strong> 
  </div>
  </div>

 </div>
   <div class="col-md mx-auto p-5">
   <div><span style="color: #1199ff;">CSS  </span> <strong>is a language that describes the style of an HTML document. </strong>
   <div><span style="color: #1199ff;">CSS  </span> <strong> describes how HTML elements should be displayed. </strong>
  </div>
</div>
</div>
<div class="Dashboard">
</div>
  <div class="display-3"> 
     <strong>CSS Example</strong> 
  </div>
  </div>
<div class="Dashboard">
<div class="card-header">
  <div class="display-3"> 
    <div class="col-md">
<div class="Dashboard">
<div class="col-md">
<div class="card-header">

      <img class="img-responsive mx-auto d-block " style="height: 50%; width:50%;" src="/assets/img/css_1.png"></div>
    </div>

</div>
<div class="Dashboard">
<div class="col-md">
<div class="card-header">
   <h2>Output</h2>
      <img class="img-responsive mx-auto d-block " style="height: 50%; width:50%;" src="/assets/img/css_2.png"></div>
    </div>

</div>
  </div>
  </div>
 </div>
</div>

<div class="Dashboard">

  <div class="display-3"> 
     <strong>Why use CSS?</strong> 
  </div>
  </div>

<div class="Dashboard">
   <div class="col-md mx-auto ">
    <div class="card-header">
   <div><strong>CSS is used to define styles for your web pages, including the design, layout and variations in display for different devices and screen sizes. </strong></div>
  </div>

</div>

<div class="Dashboard">

  <div class="display-3"> 
     <strong>CSS Saves a Lot of Work.</strong> 
  </div>
  </div>

<div class="Dashboard">
   <div class="col-md mx-auto ">
   <p>The style definitions are normally saved in external .css files.</p>
    <p>With an external stylesheet file, you can change the look of an entire website by changing just one file.</p>

</div>
<div  id="js" class="Dashboard pt-5"></div>


<div class="Dashboard">
<div class="card-header">
  <div class="display-1"> <div class="col-md">
    <strong>JavaScript?</strong> 
  </div>
  </div>

<div class="Dashboard">
   <div class="col-md mx-auto ">
    <div class="card-header">
   <div><span style="color:#175A8B;"> JavaScript </span> is the programming language of HTML and the Web. </strong></div>
   <div class="col-md p-1"></div>
   <div><span style="color:#175A8B;"> JavaScript </span> is easy to learn. </strong></div>
  
  </div>
  <div class="Dashboard">

  <div class="display-3"> 
    <div class="col-md">
<div class="Dashboard">
<div class="col-md">
<div class="card-header">

      <img class="img-responsive mx-auto d-block " style="height: 50%; width:50%;" src="/assets/img/Js_1.png"></div>
    </div>

</div>
<div class="Dashboard">
<div class="col-md">
<div class="card-header">
   <h2>Output</h2>
      <img class="img-responsive mx-auto d-block " style="height: 50%; width:50%;" src="/assets/img/js_2.png"></div>
    </div>

</div>
  </div>
  </div>
 </div>
</div>
<div class="Dashboard">

  <div class="display-3"> 
     <strong>Why Study JavaScript?</strong> 
  </div>
  </div>

<div class="Dashboard">
   <div class="col-md mx-auto ">
    <div class="card-header">
   <div><strong>JavaScript is one of the 3 languages all web developers must learn:</strong></div>
  </div>
<div class="Dashboard">
   <div class="col-md mx-auto ">
    <div class="card-header">
   <div><strong>1. HTML to define the content of web pages</strong></div>
     <div class="col-md mx-auto p-1"></div>
  <div><strong>2. CSS to specify the layout of web pages</strong></div>
    <div class="col-md mx-auto p-1"></div>
  <div><strong>3. JavaScript to program the behavior of web pages.</strong></div>
  </div>
  <div class="col-md mx-auto p-1"></div>
</div>


</div>




 <div id="footer" class="row">
    <div class="col">
    <div class="card border-warning mb-3 m-5" style="max-width: 20rem;">
  <div class="card-header bg-transparent border-warning ">Did you know?</div>
  <div class="card-body text-warning ">
    <h4 class="card-title">HTML.</h4>
    <p class="card-text">HTML5 is supported in all modern browsers.</p>
   <p class="card-text">HTML is easy to learn - You will enjoy it.</p> </div>
  <div class="card-footer bg-transparent border-warning ">e-tool.</div>
</div>
    </div>
    <div class="col">
     <div class="card border-info mb-3 m-5" style="max-width: 20rem;">
  <div class="card-header bg-transparent border-info">Did you know?</div>
  <div class="card-body text-info">
    <h4 class="card-info">CSS.</h4>
    <p class="card-info">An id and a class name cannot start with a number.</p>
   <p class="card-info">CSS3 is the latest standard for CSS.</p></div>
  <div class="card-footer bg-transparent border-info">e-tool.</div>
</div>
    </div>
    <div class="col">
    <div class="card border-success mb-3 m-5" style="max-width: 20rem;">
  <div class="card-header bg-transparent border-success">Did you know?</div>
  <div class="card-body text-success">
    <h4 class="card-title">JavaScript.</h4>
    <p class="card-text">JavaScript and Java are completely different languages, both in concept and design.</p>
   <p class="card-text">JavaScript was invented by Brendan Eich in 1995, and became an ECMA standard in 1997.
ECMA-262 is the official name of the standard. ECMAScript is the official name of the language.</p></div>
  <div class="card-footer bg-transparent border-success">e-tool.</div>
</div>
    </div>
  </div>
</div>


