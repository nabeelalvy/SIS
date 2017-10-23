<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>SIS</title>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" sizes="32x32" href=<?php echo base_url();?>assets/images/favicon-32x32.png">

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="<?php echo base_url();?>assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" />
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--assets/css/bootstrap.css" />-->
<!--    <link rel="stylesheet" href="--><?php //echo base_url();?><!--assets/css/bootstrap.min.css" />-->
    <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo base_url();?>assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo base_url();?>assets/css/ie9.css" /><![endif]-->
</head>
<style>
    button.accordion {
        /*background-color: #eee;*/
        background-color: darkgrey;
        color: #444;
        cursor: pointer;
        padding: 1px;
        width: 100%;
        /*border: none;*/
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }

    button.accordion.active, button.accordion:hover {
        /*background-color: #ddd;*/
        background-color: black;
    }

    button.accordion:after {
        content: '\002B';
        color: #777;
        font-weight: bold;
        float: right;
        margin-left: 5px;
    }

    button.accordion.active:after {
        content: "\2212";
    }

    div.panel {
        padding: 0 18px;
        background-color: indigo;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }
</style>
<body>

<!-- Header -->
<div id="header">

    <div class="top">

        <!-- Logo -->
        <div id="logo">
            <span class="image avatar48"><img src="<?php echo base_url();?>assets/images/avatar.jpg" alt="" /></span>
            <h1 id="title">Jane Doe</h1>
            <p>Hyperspace Engineer</p>
        </div>

        <!-- Nav -->
        <nav id="nav">
            <!--

                Prologue's nav expects links in one of two formats:

                1. Hash link (scrolls to a different section within the page)

                   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

                2. Standard link (sends the user to another page/site)

                   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

            -->
            <ul>
                <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Home</span></a></li>
                <li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Rankings</span></a></li>
                <li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">About Me</span></a></li>
                <li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>


                <button class="accordion btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Section 1</button>
                <div class="panel">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                            Option one
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios2" value="option2">
                            Option two
                        </label>
                    </div>
                </div>

                <button <button class="accordion btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Section 2</button>
                <div class="panel">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                            Option one
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios2" value="option2">
                            Option two
                        </label>
                    </div>
                </div>

                <button <button class="accordion btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Section 3</button>
                <div class="panel">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                            Option one
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios2" value="option2">
                            Option two
                        </label>
                    </div>
                </div>

            </ul>
        </nav>

    </div>

    <div class="bottom">

        <!-- Social Icons -->
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
        </ul>

    </div>

</div>

<!-- Main -->
<div id="main">

    <!-- Intro -->
    <section id="top" class="one dark cover">
        <div class="container">

            <header>
                <h2><strong>Welcome</strong> to <strong>School Information System<strong></h2>
                <p>Ligula scelerisque justo sem accumsan diam quis<br />
                    vitae natoque dictum sollicitudin elementum.</p>
            </header>

            <footer>
                <a href="#portfolio" class="button scrolly">Student Portal</a>
                <a href="#portfolio" class="button scrolly">SignIn</a>
                <a href="#portfolio" class="button scrolly">Search School</a>
            </footer>

        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="two">
        <div class="container">

            <header>
                <h2>Rankings</h2>
            </header>

            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                </tr>
                <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                    <td>$433,060</td>
                </tr>
                <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td>$162,700</td>
                </tr>
                <tr>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2012/12/02</td>
                    <td>$372,000</td>
                </tr>
                <tr>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                    <td>2012/08/06</td>
                    <td>$137,500</td>
                </tr>
                <tr>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                    <td>2010/10/14</td>
                    <td>$327,900</td>
                </tr>
                <tr>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                    <td>2009/09/15</td>
                    <td>$205,500</td>
                </tr>
                <tr>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>2008/12/13</td>
                    <td>$103,600</td>
                </tr>
                <tr>
                    <td>Jena Gaines</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>30</td>
                    <td>2008/12/19</td>
                    <td>$90,560</td>
                </tr>
                <tr>
                    <td>Quinn Flynn</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                </tr>
                <tr>
                    <td>Charde Marshall</td>
                    <td>Regional Director</td>
                    <td>San Francisco</td>
                    <td>36</td>
                    <td>2008/10/16</td>
                    <td>$470,600</td>
                </tr>
                <tr>
                    <td>Haley Kennedy</td>
                    <td>Senior Marketing Designer</td>
                    <td>London</td>
                    <td>43</td>
                    <td>2012/12/18</td>
                    <td>$313,500</td>
                </tr>
                <tr>
                    <td>Tatyana Fitzpatrick</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>19</td>
                    <td>2010/03/17</td>
                    <td>$385,750</td>
                </tr>
                <tr>
                    <td>Michael Silva</td>
                    <td>Marketing Designer</td>
                    <td>London</td>
                    <td>66</td>
                    <td>2012/11/27</td>
                    <td>$198,500</td>
                </tr>
                <tr>
                    <td>Paul Byrd</td>
                    <td>Chief Financial Officer (CFO)</td>
                    <td>New York</td>
                    <td>64</td>
                    <td>2010/06/09</td>
                    <td>$725,000</td>
                </tr>
                <tr>
                    <td>Gloria Little</td>
                    <td>Systems Administrator</td>
                    <td>New York</td>
                    <td>59</td>
                    <td>2009/04/10</td>
                    <td>$237,500</td>
                </tr>
                <tr>
                    <td>Bradley Greer</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>41</td>
                    <td>2012/10/13</td>
                    <td>$132,000</td>
                </tr>
                <tr>
                    <td>Dai Rios</td>
                    <td>Personnel Lead</td>
                    <td>Edinburgh</td>
                    <td>35</td>
                    <td>2012/09/26</td>
                    <td>$217,500</td>
                </tr>
                <tr>
                    <td>Jenette Caldwell</td>
                    <td>Development Lead</td>
                    <td>New York</td>
                    <td>30</td>
                    <td>2011/09/03</td>
                    <td>$345,000</td>
                </tr>
                <tr>
                    <td>Yuri Berry</td>
                    <td>Chief Marketing Officer (CMO)</td>
                    <td>New York</td>
                    <td>40</td>
                    <td>2009/06/25</td>
                    <td>$675,000</td>
                </tr>
                <tr>
                    <td>Caesar Vance</td>
                    <td>Pre-Sales Support</td>
                    <td>New York</td>
                    <td>21</td>
                    <td>2011/12/12</td>
                    <td>$106,450</td>
                </tr>
                <tr>
                    <td>Doris Wilder</td>
                    <td>Sales Assistant</td>
                    <td>Sidney</td>
                    <td>23</td>
                    <td>2010/09/20</td>
                    <td>$85,600</td>
                </tr>
                <tr>
                    <td>Angelica Ramos</td>
                    <td>Chief Executive Officer (CEO)</td>
                    <td>London</td>
                    <td>47</td>
                    <td>2009/10/09</td>
                    <td>$1,200,000</td>
                </tr>
                <tr>
                    <td>Gavin Joyce</td>
                    <td>Developer</td>
                    <td>Edinburgh</td>
                    <td>42</td>
                    <td>2010/12/22</td>
                    <td>$92,575</td>
                </tr>
                <tr>
                    <td>Jennifer Chang</td>
                    <td>Regional Director</td>
                    <td>Singapore</td>
                    <td>28</td>
                    <td>2010/11/14</td>
                    <td>$357,650</td>
                </tr>
                <tr>
                    <td>Brenden Wagner</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>28</td>
                    <td>2011/06/07</td>
                    <td>$206,850</td>
                </tr>
                <tr>
                    <td>Fiona Green</td>
                    <td>Chief Operating Officer (COO)</td>
                    <td>San Francisco</td>
                    <td>48</td>
                    <td>2010/03/11</td>
                    <td>$850,000</td>
                </tr>
                <tr>
                    <td>Shou Itou</td>
                    <td>Regional Marketing</td>
                    <td>Tokyo</td>
                    <td>20</td>
                    <td>2011/08/14</td>
                    <td>$163,000</td>
                </tr>
                <tr>
                    <td>Michelle House</td>
                    <td>Integration Specialist</td>
                    <td>Sidney</td>
                    <td>37</td>
                    <td>2011/06/02</td>
                    <td>$95,400</td>
                </tr>
                <tr>
                    <td>Suki Burks</td>
                    <td>Developer</td>
                    <td>London</td>
                    <td>53</td>
                    <td>2009/10/22</td>
                    <td>$114,500</td>
                </tr>
                <tr>
                    <td>Prescott Bartlett</td>
                    <td>Technical Author</td>
                    <td>London</td>
                    <td>27</td>
                    <td>2011/05/07</td>
                    <td>$145,000</td>
                </tr>
                <tr>
                    <td>Gavin Cortez</td>
                    <td>Team Leader</td>
                    <td>San Francisco</td>
                    <td>22</td>
                    <td>2008/10/26</td>
                    <td>$235,500</td>
                </tr>
                <tr>
                    <td>Martena Mccray</td>
                    <td>Post-Sales support</td>
                    <td>Edinburgh</td>
                    <td>46</td>
                    <td>2011/03/09</td>
                    <td>$324,050</td>
                </tr>
                <tr>
                    <td>Unity Butler</td>
                    <td>Marketing Designer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>2009/12/09</td>
                    <td>$85,675</td>
                </tr>
                <tr>
                    <td>Howard Hatfield</td>
                    <td>Office Manager</td>
                    <td>San Francisco</td>
                    <td>51</td>
                    <td>2008/12/16</td>
                    <td>$164,500</td>
                </tr>
                <tr>
                    <td>Hope Fuentes</td>
                    <td>Secretary</td>
                    <td>San Francisco</td>
                    <td>41</td>
                    <td>2010/02/12</td>
                    <td>$109,850</td>
                </tr>
                <tr>
                    <td>Vivian Harrell</td>
                    <td>Financial Controller</td>
                    <td>San Francisco</td>
                    <td>62</td>
                    <td>2009/02/14</td>
                    <td>$452,500</td>
                </tr>
                <tr>
                    <td>Timothy Mooney</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>37</td>
                    <td>2008/12/11</td>
                    <td>$136,200</td>
                </tr>
                <tr>
                    <td>Jackson Bradshaw</td>
                    <td>Director</td>
                    <td>New York</td>
                    <td>65</td>
                    <td>2008/09/26</td>
                    <td>$645,750</td>
                </tr>
                <tr>
                    <td>Olivia Liang</td>
                    <td>Support Engineer</td>
                    <td>Singapore</td>
                    <td>64</td>
                    <td>2011/02/03</td>
                    <td>$234,500</td>
                </tr>
                <tr>
                    <td>Bruno Nash</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>38</td>
                    <td>2011/05/03</td>
                    <td>$163,500</td>
                </tr>
                <tr>
                    <td>Sakura Yamamoto</td>
                    <td>Support Engineer</td>
                    <td>Tokyo</td>
                    <td>37</td>
                    <td>2009/08/19</td>
                    <td>$139,575</td>
                </tr>
                <tr>
                    <td>Thor Walton</td>
                    <td>Developer</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2013/08/11</td>
                    <td>$98,540</td>
                </tr>
                <tr>
                    <td>Finn Camacho</td>
                    <td>Support Engineer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>2009/07/07</td>
                    <td>$87,500</td>
                </tr>
                <tr>
                    <td>Serge Baldwin</td>
                    <td>Data Coordinator</td>
                    <td>Singapore</td>
                    <td>64</td>
                    <td>2012/04/09</td>
                    <td>$138,575</td>
                </tr>
                <tr>
                    <td>Zenaida Frank</td>
                    <td>Software Engineer</td>
                    <td>New York</td>
                    <td>63</td>
                    <td>2010/01/04</td>
                    <td>$125,250</td>
                </tr>
                <tr>
                    <td>Zorita Serrano</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>56</td>
                    <td>2012/06/01</td>
                    <td>$115,000</td>
                </tr>
                <tr>
                    <td>Jennifer Acosta</td>
                    <td>Junior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>43</td>
                    <td>2013/02/01</td>
                    <td>$75,650</td>
                </tr>
                <tr>
                    <td>Cara Stevens</td>
                    <td>Sales Assistant</td>
                    <td>New York</td>
                    <td>46</td>
                    <td>2011/12/06</td>
                    <td>$145,600</td>
                </tr>
                <tr>
                    <td>Hermione Butler</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>47</td>
                    <td>2011/03/21</td>
                    <td>$356,250</td>
                </tr>
                <tr>
                    <td>Lael Greer</td>
                    <td>Systems Administrator</td>
                    <td>London</td>
                    <td>21</td>
                    <td>2009/02/27</td>
                    <td>$103,500</td>
                </tr>
                <tr>
                    <td>Jonas Alexander</td>
                    <td>Developer</td>
                    <td>San Francisco</td>
                    <td>30</td>
                    <td>2010/07/14</td>
                    <td>$86,500</td>
                </tr>
                <tr>
                    <td>Shad Decker</td>
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>51</td>
                    <td>2008/11/13</td>
                    <td>$183,000</td>
                </tr>
                <tr>
                    <td>Michael Bruce</td>
                    <td>Javascript Developer</td>
                    <td>Singapore</td>
                    <td>29</td>
                    <td>2011/06/27</td>
                    <td>$183,000</td>
                </tr>
                <tr>
                    <td>Donna Snider</td>
                    <td>Customer Support</td>
                    <td>New York</td>
                    <td>27</td>
                    <td>2011/01/25</td>
                    <td>$112,000</td>
                </tr>
                </tbody>
            </table>

    </section>

    <!-- About Me -->
    <section id="about" class="three">
        <div class="container">

            <header>
                <h2>About Me</h2>
            </header>

            <a href="#" class="image featured"><img src="<?php echo base_url();?>images/pic08.jpg" alt="" /></a>

            <p>Tincidunt eu elit diam magnis pretium accumsan etiam id urna. Ridiculus
                ultricies curae quis et rhoncus velit. Lobortis elementum aliquet nec vitae
                laoreet eget cubilia quam non etiam odio tincidunt montes. Elementum sem
                parturient nulla quam placerat viverra mauris non cum elit tempus ullamcorper
                dolor. Libero rutrum ut lacinia donec curae mus vel quisque sociis nec
                ornare iaculis.</p>

        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="four">
        <div class="container">

            <header>
                <h2>Contact</h2>
            </header>

            <p>Elementum sem parturient nulla quam placerat viverra
                mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia
                donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc
                orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

            <form method="post" action="#">
                <div class="row">
                    <div class="6u 12u$(mobile)"><input type="text" name="name" placeholder="Name" /></div>
                    <div class="6u$ 12u$(mobile)"><input type="text" name="email" placeholder="Email" /></div>
                    <div class="12u$">
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="12u$">
                        <input type="submit" value="Send Message" />
                    </div>
                </div>
            </form>

        </div>
    </section>

</div>

<!-- Footer -->
<div id="footer">

    <!-- Copyright -->
    <ul class="copyright">
        <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>

</div>

<!-- Scripts -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-3.1.0.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.js"></script>
<!--<script src="--><?php //echo base_url();?><!--assets/js/bootstrap.min.js"></script>-->
<script src="<?php echo base_url();?>assets/js/jquery.scrolly.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.scrollzer.min.js"></script>
<script src="<?php echo base_url();?>assets/js/skel.min.js"></script>
<script src="<?php echo base_url();?>assets/js/util.js"></script>
<!--[if lte IE 8]><script src="<?php echo base_url();?>assets/js/ie/respond.min.js"></script><![endif]-->
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

<script>

    $(document).ready(function() {
        $('#example').DataTable( {
            "paging":   true,
            "ordering": true,
            "info":     false
        });
    } );
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        }
    }
</script>

</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Nabeel Alvi
 * Date: 8/21/2017
 * Time: 11:24 AM
 */