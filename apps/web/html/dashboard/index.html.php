<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>CV Atlas :: Dashboard</title>
    <link rel="stylesheet" href="/assets/css/layout-screen-desktop.css">
    <link rel="stylesheet" href="/assets/css/fonts-screen-desktop.css">
</head>
<body>

<header>
    <div class="logo-header">
        <div class="logo">CV ATLAS</div>
    </div>
    <div class="content-header">

        <div class="top-navi">
            <a href="time-sheets">Timesheets</a>
            <a href="logout">logout</a>
        </div>
    </div>
</header>
<nav class="side-nav">
    <div class="side-nav-links">
        <div class="docs-sidebar-section" id="table-of-contents">
            <a href="index.html" class="docs-sidebar-section-title"><h4>DevStack </h4></a>
            <ul class="current">
                <li class="toctree-l1"><a class="reference internal" href="configuration.html">Configuration</a></li>
                <li class="toctree-l1 current"><a class="current reference internal" href="#">Developing with Devstack</a><ul>
                        <li class="toctree-l2"><a class="reference internal" href="#inspecting-services">Inspecting Services</a></li>
                        <li class="toctree-l2"><a class="reference internal" href="#patching-a-service">Patching a Service</a></li>
                        <li class="toctree-l2"><a class="reference internal" href="#testing-a-patch-series">Testing a Patch Series</a></li>
                        <li class="toctree-l2"><a class="reference internal" href="#testing-changes-to-libraries">Testing Changes to Libraries</a></li>
                    </ul>
                </li>
                <li class="toctree-l1"><a class="reference internal" href="faq.html">FAQ</a></li>
                <li class="toctree-l1"><a class="reference internal" href="guides.html">Guides</a></li>
                <li class="toctree-l1"><a class="reference internal" href="hacking.html">Contributing to DevStack</a></li>
                <li class="toctree-l1"><a class="reference internal" href="networking.html">DevStack Networking</a></li>
                <li class="toctree-l1"><a class="reference internal" href="overview.html">Overview</a></li>
                <li class="toctree-l1"><a class="reference internal" href="plugin-registry.html">DevStack Plugin Registry</a></li>
                <li class="toctree-l1"><a class="reference internal" href="plugins.html">Plugins</a></li>
                <li class="toctree-l1"><a class="reference internal" href="systemd.html">Using Systemd in DevStack</a></li>
            </ul>

        </div>

        <div class="docs-sidebar-toc">
            <div class="docs-sidebar-section active" id="local-table-of-contents">
                <h4 class="docs-sidebar-section-title">Page Contents</h4>
                <ul>
                    <li><a class="reference internal" href="#">Developing with Devstack</a><ul>
                            <li><a class="reference internal" href="#inspecting-services">Inspecting Services</a></li>
                            <li><a class="reference internal" href="#patching-a-service">Patching a Service</a></li>
                            <li><a class="reference internal" href="#testing-a-patch-series">Testing a Patch Series</a></li>
                            <li><a class="reference internal" href="#testing-changes-to-libraries">Testing Changes to Libraries</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <div class="docs-sidebar-toc">
            <div class="docs-sidebar-section active" id="local-table-of-contents">
                <h4 class="docs-sidebar-section-title">Page Contents</h4>
                <ul>
                    <li><a class="reference internal" href="#">Developing with Devstack</a><ul>
                            <li><a class="reference internal" href="#inspecting-services">Inspecting Services</a></li>
                            <li><a class="reference internal" href="#patching-a-service">Patching a Service</a></li>
                            <li><a class="reference internal" href="#testing-a-patch-series">Testing a Patch Series</a></li>
                            <li><a class="reference internal" href="#testing-changes-to-libraries">Testing Changes to Libraries</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <div class="docs-sidebar-toc">
            <div class="docs-sidebar-section active" id="local-table-of-contents">
                <h4 class="docs-sidebar-section-title">Page Contents</h4>
                <ul>
                    <li><a class="reference internal" href="#">Developing with Devstack</a><ul>
                            <li><a class="reference internal" href="#inspecting-services">Inspecting Services</a></li>
                            <li><a class="reference internal" href="#patching-a-service">Patching a Service</a></li>
                            <li><a class="reference internal" href="#testing-a-patch-series">Testing a Patch Series</a></li>
                            <li><a class="reference internal" href="#testing-changes-to-libraries">Testing Changes to Libraries</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <div class="docs-sidebar-toc">
            <div class="docs-sidebar-section active" id="local-table-of-contents">
                <h4 class="docs-sidebar-section-title">Page Contents</h4>
                <ul>
                    <li><a class="reference internal" href="#">Developing with Devstack</a><ul>
                            <li><a class="reference internal" href="#inspecting-services">Inspecting Services</a></li>
                            <li><a class="reference internal" href="#patching-a-service">Patching a Service</a></li>
                            <li><a class="reference internal" href="#testing-a-patch-series">Testing a Patch Series</a></li>
                            <li><a class="reference internal" href="#testing-changes-to-libraries">Testing Changes to Libraries</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <div class="docs-sidebar-toc">
            <div class="docs-sidebar-section active" id="local-table-of-contents">
                <h4 class="docs-sidebar-section-title">Page Contents</h4>
                <ul>
                    <li><a class="reference internal" href="#">Developing with Devstack</a><ul>
                            <li><a class="reference internal" href="#inspecting-services">Inspecting Services</a></li>
                            <li><a class="reference internal" href="#patching-a-service">Patching a Service</a></li>
                            <li><a class="reference internal" href="#testing-a-patch-series">Testing a Patch Series</a></li>
                            <li><a class="reference internal" href="#testing-changes-to-libraries">Testing Changes to Libraries</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>
<main>


    <div class="main-content">
        <?php
        echo date("Y-m-d H:i:s");
        ?>
        <div id="siteSub" class="noprint">From Wikipedia, the free encyclopedia</div>				<div id="contentSub"></div>
        <div id="jump-to-nav" class="mw-jump">
            Jump to:					<a href="#mw-head">navigation</a>, 					<a href="#p-search">search</a>
        </div>
        <div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><div class="mw-parser-output"><table class="infobox vcard" style="width:22em">
                    <caption class="fn org">English Wikipedia</caption>
                    <tbody><tr>
                        <td colspan="2" style="text-align:center"><a href="/wiki/File:Wikipedia-logo-v2-en.svg" class="image" title="85%"><img alt="85%" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Wikipedia-logo-v2-en.svg/135px-Wikipedia-logo-v2-en.svg.png" width="135" height="155" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Wikipedia-logo-v2-en.svg/203px-Wikipedia-logo-v2-en.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Wikipedia-logo-v2-en.svg/270px-Wikipedia-logo-v2-en.svg.png 2x" data-file-width="135" data-file-height="155"></a>
                            <div>Logo of the English Wikipedia</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center">
                            <div class="mw-collapsible mw-collapsed" style="box-sizing:border-box;width:100%;font-size:95%;padding:4px;border:none;"><span class="mw-collapsible-toggle mw-collapsible-toggle-collapsed" role="button" tabindex="0"><span>[</span><a class="mw-collapsible-text">show</a><span>]</span></span>
                                <div style="font-size:100%;line-height:1.6;font-weight:bold;background:transparent;text-align:left;;background:gainsboro;text-align:center">Screenshot</div>
                                <div class="mw-collapsible-content" style="background: transparent; text-align: center; display: none;"><a href="/wiki/File:English_Wikipedia_screenshot.png" class="image"><img alt="The homepage of the English Wikipedia" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8c/English_Wikipedia_screenshot.png/300px-English_Wikipedia_screenshot.png" width="300" height="587" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8c/English_Wikipedia_screenshot.png/450px-English_Wikipedia_screenshot.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8c/English_Wikipedia_screenshot.png/600px-English_Wikipedia_screenshot.png 2x" data-file-width="1280" data-file-height="2504"></a>
                                    <div>The homepage of the English Wikipedia celebrating its 5,000,000th article in November 2015</div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div style="padding:0.1em 0;line-height:1.2em;">Type of site</div>
                        </th>
                        <td><a href="/wiki/Internet_encyclopedia" class="mw-redirect" title="Internet encyclopedia">Internet encyclopedia</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Owner</th>
                        <td><a href="/wiki/Wikimedia_Foundation" title="Wikimedia Foundation">Wikimedia Foundation</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Created&nbsp;by</th>
                        <td><a href="/wiki/Jimmy_Wales" title="Jimmy Wales">Jimmy Wales</a>, <a href="/wiki/Larry_Sanger" title="Larry Sanger">Larry Sanger</a><sup id="cite_ref-foundercontroversy_1-0" class="reference"><a href="#cite_note-foundercontroversy-1">[1]</a></sup></td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="/wiki/Slogan" title="Slogan">Slogan(s)</a></th>
                        <td>The free encyclopedia that anyone can edit.</td>
                    </tr>
                    <tr>
                        <th scope="row">Website</th>
                        <td class="url"><span class="url"><a class="external text" href="https://en.wikipedia.org/">en<wbr>.wikipedia<wbr>.org</a></span></td>
                    </tr>
                    <tr>
                        <th scope="row">Commercial</th>
                        <td>No</td>
                    </tr>
                    <tr>
                        <th scope="row">Registration</th>
                        <td>Optional, but required for certain tasks including
                            <div class="plainlist">
                                <ul>
                                    <li>•<span style="white-space:nowrap"> </span><a href="/wiki/Protected_page" class="mw-redirect" title="Protected page">protected page</a> edit </li>
                                    <li>•<span style="white-space:nowrap"> </span>page creation </li>
                                    <li>•<span style="white-space:nowrap"> </span>file upload </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="/wiki/Registered_user" title="Registered user">Users</a></th>
                        <td>32,882,679</td>
                    </tr>
                    <tr>
                        <th scope="row">Launched</th>
                        <td>15&nbsp;January 2001<span class="noprint">; 17 years ago</span><span style="display:none">&nbsp;(<span class="bday dtstart published updated">2001-01-15</span>)</span></td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div style="padding:0.1em 0;line-height:1.2em;">Content license</div>
                        </th>
                        <td><span class="nowrap"><a href="/wiki/Creative_Commons_licenses" class="mw-redirect" title="Creative Commons licenses">Creative Commons Attribution/<br>
Share-Alike</a> 3.0</span> (most text also dual-licensed under <a href="/wiki/GFDL" class="mw-redirect" title="GFDL">GFDL</a>)<br>
                            Media licensing varies</td>
                    </tr>
                    </tbody></table>
                <p>The <b>English Wikipedia</b> is the <a href="/wiki/English_language" title="English language">English-language</a> edition of the free online encyclopedia <a href="/wiki/Wikipedia" title="Wikipedia">Wikipedia</a>. Founded on 15 January 2001, it is the first edition of Wikipedia and, as of November&nbsp;2017<sup class="plainlinks noexcerpt noprint asof-tag update" style="display:none;"><a class="external text" href="//en.wikipedia.org/w/index.php?title=English_Wikipedia&amp;action=edit">[update]</a></sup>, has <a href="/wiki/List_of_Wikipedias" title="List of Wikipedias">the most articles of any of the editions</a>.<sup id="cite_ref-2" class="reference"><a href="#cite_note-2">[2]</a></sup> As of February 2018, <span style="display:none" class="sortkey">7001120000000000000♠</span>12% of articles in all Wikipedias belong to the English-language edition. This share has gradually declined from more than 50 percent in 2003, due to the growth of Wikipedias in other languages.<sup id="cite_ref-3" class="reference"><a href="#cite_note-3">[3]</a></sup> There are <a href="/wiki/Special:Statistics" title="Special:Statistics">5,569,465</a> articles on the site (live count).<sup id="cite_ref-4" class="reference"><a href="#cite_note-4">[4]</a></sup> In October 2015, the combined text of the English Wikipedia's articles totalled 11.5 <a href="/wiki/Gigabyte" title="Gigabyte">gigabytes</a> when compressed.<sup id="cite_ref-5" class="reference"><a href="#cite_note-5">[5]</a></sup> On 1 November 2015, the English Wikipedia announced it had reached 5,000,000 articles<sup id="cite_ref-6" class="reference"><a href="#cite_note-6">[6]</a></sup> and ran a special logo to reflect the milestone.<sup id="cite_ref-7" class="reference"><a href="#cite_note-7">[7]</a></sup></p>
                <p>The <a href="/wiki/Simple_English_Wikipedia" title="Simple English Wikipedia">Simple English Wikipedia</a> is a variation in which most of the articles use only basic English vocabulary. There is also the <a href="/wiki/Old_English" title="Old English">Old English (Ænglisc/Anglo-Saxon)</a> Wikipedia (<a href="https://ang.wikipedia.org/wiki/H%C4%93afodtramet" class="extiw" title="ang:Hēafodtramet">angwiki</a>). Community-produced news publications include <i><a href="/wiki/The_Signpost" title="The Signpost">The Signpost</a></i>.<sup id="cite_ref-AyersMatthews2008_8-0" class="reference"><a href="#cite_note-AyersMatthews2008-8">[8]</a></sup></p>
                <p></p>
                <div id="toc" class="toc">
                    <div class="toctitle" lang="en" dir="ltr">
                        <h2>Contents</h2>
                        <span class="toctoggle">&nbsp;[<a role="button" tabindex="0" class="togglelink">hide</a>]&nbsp;</span></div>
                    <ul>
                        <li class="toclevel-1 tocsection-1"><a href="#Pioneering_edition"><span class="tocnumber">1</span> <span class="toctext">Pioneering edition</span></a></li>
                        <li class="toclevel-1 tocsection-2"><a href="#Users_and_editors"><span class="tocnumber">2</span> <span class="toctext">Users and editors</span></a>
                            <ul>
                                <li class="toclevel-2 tocsection-3"><a href="#Arbitration_committee"><span class="tocnumber">2.1</span> <span class="toctext">Arbitration committee</span></a></li>
                            </ul>
                        </li>
                        <li class="toclevel-1 tocsection-4"><a href="#Controversies"><span class="tocnumber">3</span> <span class="toctext">Controversies</span></a>
                            <ul>
                                <li class="toclevel-2 tocsection-5"><a href="#Threats_against_high_schools"><span class="tocnumber">3.1</span> <span class="toctext">Threats against high schools</span></a></li>
                                <li class="toclevel-2 tocsection-6"><a href="#Disputed_articles"><span class="tocnumber">3.2</span> <span class="toctext">Disputed articles</span></a></li>
                                <li class="toclevel-2 tocsection-7"><a href="#Varieties_of_English"><span class="tocnumber">3.3</span> <span class="toctext">Varieties of English</span></a></li>
                            </ul>
                        </li>
                        <li class="toclevel-1 tocsection-8"><a href="#Wikiprojects,_and_assessments_of_articles'_importance_and_quality"><span class="tocnumber">4</span> <span class="toctext">Wikiprojects, and assessments of articles' importance and quality</span></a></li>
                        <li class="toclevel-1 tocsection-9"><a href="#Graphics"><span class="tocnumber">5</span> <span class="toctext">Graphics</span></a></li>
                        <li class="toclevel-1 tocsection-10"><a href="#Internal_news_publications"><span class="tocnumber">6</span> <span class="toctext">Internal news publications</span></a></li>
                        <li class="toclevel-1 tocsection-11"><a href="#See_also"><span class="tocnumber">7</span> <span class="toctext">See also</span></a></li>
                        <li class="toclevel-1 tocsection-12"><a href="#Footnotes"><span class="tocnumber">8</span> <span class="toctext">Footnotes</span></a></li>
                        <li class="toclevel-1 tocsection-13"><a href="#References"><span class="tocnumber">9</span> <span class="toctext">References</span></a></li>
                        <li class="toclevel-1 tocsection-14"><a href="#External_links"><span class="tocnumber">10</span> <span class="toctext">External links</span></a></li>
                    </ul>
                </div>
                <p></p>
                <h2><span class="mw-headline" id="Pioneering_edition">Pioneering edition</span></h2>
                <div role="note" class="hatnote navigation-not-searchable">See also: <a href="/wiki/Wikipedia:Milestones" title="Wikipedia:Milestones">Wikipedia:Milestones</a></div>
                <p>The English Wikipedia was the first Wikipedia edition and has remained the largest. It has pioneered many ideas as conventions, policies or features which were later adopted by Wikipedia editions in some of the other languages. These ideas include "featured articles",<sup id="cite_ref-9" class="reference"><a href="#cite_note-9">[9]</a></sup> the neutral-point-of-view policy,<sup id="cite_ref-10" class="reference"><a href="#cite_note-10">[10]</a></sup> navigation templates,<sup id="cite_ref-11" class="reference"><a href="#cite_note-11">[11]</a></sup> the sorting of short "stub" articles into sub-categories,<sup id="cite_ref-12" class="reference"><a href="#cite_note-12">[12]</a></sup> <a href="/wiki/Dispute_resolution" title="Dispute resolution">dispute resolution</a> mechanisms such as mediation and arbitration,<sup id="cite_ref-13" class="reference"><a href="#cite_note-13">[13]</a></sup> and weekly collaborations.<sup id="cite_ref-14" class="reference"><a href="#cite_note-14">[14]</a></sup></p>
                <p>The English Wikipedia has adopted features from Wikipedias in other languages. These features include verified revisions from the German Wikipedia (<a href="https://de.wikipedia.org/wiki/Wikipedia:Hauptseite" class="extiw" title="de:Wikipedia:Hauptseite">dewiki</a>) and town population-lookup templates from the <a href="/wiki/Dutch_Wikipedia" title="Dutch Wikipedia">Dutch Wikipedia</a> (<a href="https://nl.wikipedia.org/wiki/Hoofdpagina" class="extiw" title="nl:Hoofdpagina">nlwiki</a>).</p>
                <p>Although the English Wikipedia stores images and audio files, as well as text files, many of the images have been moved to <a href="/wiki/Wikimedia_Commons" title="Wikimedia Commons">Wikimedia Commons</a> with the same name, as passed-through files. However, the English Wikipedia also has <a href="/wiki/Fair-use" class="mw-redirect" title="Fair-use">fair-use</a> images and audio/video files (with copyright restrictions), most of which are not allowed on Commons.</p>
                <p>Many of the most active participants in the <a href="/wiki/Wikimedia_Foundation" title="Wikimedia Foundation">Wikimedia Foundation</a>, and the developers of the <a href="/wiki/MediaWiki" title="MediaWiki">MediaWiki</a> software that powers Wikipedia, are English users.</p>
                <h2><span class="mw-headline" id="Users_and_editors">Users and editors</span></h2>
                <center>
                    <table class="wikitable" style="text-align:center">
                        <caption><b>English Wikipedia statistics</b></caption>
                        <tbody><tr>
                            <th>Number of user accounts</th>
                            <th>Number of articles</th>
                            <th>Number of files</th>
                            <th>Number of administrators</th>
                        </tr>
                        <tr>
                            <td>32,882,679</td>
                            <td>5,569,465</td>
                            <td>855,011</td>
                            <td>1,230</td>
                        </tr>
                        </tbody></table>
                </center>
                <p>The English Wikipedia reached 4,000,000 registered user accounts on 1 April 2007,<sup id="cite_ref-4,564,000_15-0" class="reference"><a href="#cite_note-4,564,000-15">[15]</a></sup> just a little over a year since it had crossed a threshold of 1,000,000 registered user accounts in late February 2006.<sup id="cite_ref-1,000,000_16-0" class="reference"><a href="#cite_note-1,000,000-16">[16]</a></sup></p>
                <p>Over 800,000 editors have edited Wikipedia more than 10 times.<sup id="cite_ref-17" class="reference"><a href="#cite_note-17">[17]</a></sup> 300,000 editors edit Wikipedia every month<sup class="noprint Inline-Template Template-Fact" style="white-space:nowrap;">[<i><a href="/wiki/Wikipedia:Citation_needed" title="Wikipedia:Citation needed"><span title="This claim needs references to reliable sources. (September 2014)">citation needed</span></a></i>]</sup>; of these, over 30,000 perform more than 5 edits per month, and a little over 3,000 perform more than 100 edits per month.<sup id="cite_ref-18" class="reference"><a href="#cite_note-18">[18]</a></sup> By 24 November 2011, a total of 500 million edits had been performed on the English Wikipedia.<sup class="noprint Inline-Template Template-Fact" style="white-space:nowrap;">[<i><a href="/wiki/Wikipedia:Citation_needed" title="Wikipedia:Citation needed"><span title="This claim needs references to reliable sources. (May 2012)">citation needed</span></a></i>]</sup></p>
                <p>As the largest Wikipedia edition, and because English is such a widely used language, the English Wikipedia draws many users and editors whose <a href="/wiki/Native_language" class="mw-redirect" title="Native language">native language</a> is not English. Such users may seek information from the English Wikipedia rather than the Wikipedia of their native language because the English Wikipedia tends to contain more information about general subjects. Successful collaborations have been developed between non-native English speakers who successfully add content to the English Wikipedia and native English speakers who act as copyeditors for them.<sup class="noprint Inline-Template Template-Fact" style="white-space:nowrap;">[<i><a href="/wiki/Wikipedia:Citation_needed" title="Wikipedia:Citation needed"><span title="This claim needs references to reliable sources. (September 2014)">citation needed</span></a></i>]</sup></p>
                <h3><span class="mw-headline" id="Arbitration_committee">Arbitration committee</span></h3>
                <div role="note" class="hatnote navigation-not-searchable">Main article: <a href="/wiki/Arbitration_Committee" class="mw-redirect" title="Arbitration Committee">Arbitration Committee</a></div>
                <p>The English Wikipedia has an arbitration committee (also known as ArbCom) that consists of a panel of editors that imposes binding rulings with regard to disputes between other editors of the online encyclopedia.<sup id="cite_ref-AU_19-0" class="reference"><a href="#cite_note-AU-19">[19]</a></sup> The committee was created by <a href="/wiki/Jimmy_Wales" title="Jimmy Wales">Jimmy Wales</a> on 4 December 2003 as an extension of the decision-making power he had formerly held as owner of the site.<sup id="cite_ref-Wales1_20-0" class="reference"><a href="#cite_note-Wales1-20">[20]</a></sup><sup id="cite_ref-SSRN_21-0" class="reference"><a href="#cite_note-SSRN-21">[21]</a></sup></p>
                <p>When initially founded, the committee consisted of 12 <a href="/wiki/Arbitrators" class="mw-redirect" title="Arbitrators">arbitrators</a> divided into three groups of four members each.<sup id="cite_ref-Wales1_20-1" class="reference"><a href="#cite_note-Wales1-20">[20]</a></sup><sup id="cite_ref-Fortune_22-0" class="reference"><a href="#cite_note-Fortune-22">[22]</a></sup> Since then, the committee has gradually expanded its membership to 18 arbitrators.<sup id="cite_ref-Wales2_23-0" class="reference"><a href="#cite_note-Wales2-23">[23]</a></sup><sup class="noprint Inline-Template" style="white-space:nowrap;">[<i><a href="/wiki/Wikipedia:Verifiability" title="Wikipedia:Verifiability"><span title="One of the 18 had retired (September 2014)">not in citation given</span></a></i>]</sup></p>
                <p>Like other aspects of the English Wikipedia, some of Wikipedia's sister projects have emulated the arbitration committee with their own similar versions.<sup id="cite_ref-24" class="reference"><a href="#cite_note-24">[24]</a></sup> For instance, in 2007, an arbitration committee was founded on the <a href="/wiki/German_Wikipedia" title="German Wikipedia">German Wikipedia</a> called the <a href="/w/index.php?title=Schiedsgericht&amp;action=edit&amp;redlink=1" class="new" title="Schiedsgericht (page does not exist)">Schiedsgericht</a><span class="noprint" style="font-size:85%; font-style: normal;">&nbsp;(<a href="https://de.wikipedia.org/wiki/Schiedsgericht" class="extiw" title="de:Schiedsgericht">de</a>)</span>.<sup id="cite_ref-dewiki-2007_25-0" class="reference"><a href="#cite_note-dewiki-2007-25">[25]</a></sup></p>
                <h2><span class="mw-headline" id="Controversies">Controversies</span></h2>
                <div role="note" class="hatnote navigation-not-searchable">Main article: <a href="/wiki/Criticism_of_Wikipedia" title="Criticism of Wikipedia">Criticism of Wikipedia</a></div>
                <div role="note" class="hatnote navigation-not-searchable">See also: <a href="/wiki/Wikipedia_Seigenthaler_biography_incident" title="Wikipedia Seigenthaler biography incident">Wikipedia Seigenthaler biography incident</a> and <a href="/wiki/Essjay_controversy" title="Essjay controversy">Essjay controversy</a></div>
                <h3><span class="mw-headline" id="Threats_against_high_schools">Threats against high schools</span></h3>
                <p>Several incidents of threats of violence against high schools on Wikipedia have been reported in the mainstream press.<sup id="cite_ref-LATimes_26-0" class="reference"><a href="#cite_note-LATimes-26">[26]</a></sup><sup id="cite_ref-ABCLocal_27-0" class="reference"><a href="#cite_note-ABCLocal-27">[27]</a></sup><sup id="cite_ref-LATimes2_28-0" class="reference"><a href="#cite_note-LATimes2-28">[28]</a></sup> The <a href="/wiki/Glen_A._Wilson_High_School" title="Glen A. Wilson High School">Glen A. Wilson High School</a> was the subject of such a threat in 2008,<sup id="cite_ref-LATimes_26-1" class="reference"><a href="#cite_note-LATimes-26">[26]</a></sup><sup id="cite_ref-ABCLocal_27-1" class="reference"><a href="#cite_note-ABCLocal-27">[27]</a></sup><sup id="cite_ref-LATimes2_28-1" class="reference"><a href="#cite_note-LATimes2-28">[28]</a></sup> and a 14-year-old teenager was arrested for making a threat against <a href="/wiki/Niles_West_High_School" title="Niles West High School">Niles West High School</a> on Wikipedia in 2006.<sup id="cite_ref-29" class="reference"><a href="#cite_note-29">[29]</a></sup></p>
                <h3><span class="mw-headline" id="Disputed_articles">Disputed articles</span></h3>
                <p>A 2013 study from <a href="/wiki/Oxford_University" class="mw-redirect" title="Oxford University">Oxford University</a> concluded that the most disputed articles on the English Wikipedia tended to be broader issues, while on other language Wikipedias the most disputed articles tended to be regional issues; this is due to the English language's status as a global <i><a href="/wiki/Lingua_franca" title="Lingua franca">lingua franca</a></i>, which means that many who edit the English Wikipedia <a href="/wiki/English_as_a_second_language" class="mw-redirect" title="English as a second language">do not speak English as a native language</a>.<sup class="noprint Inline-Template" style="margin-left:0.1em; white-space:nowrap;">[<i><a href="/wiki/Wikipedia:Please_clarify" title="Wikipedia:Please clarify"><span title="The text near this tag may need clarification or removal of jargon. (March 2017)">clarification needed</span></a></i>]</sup> The study stated that the most disputed entries on the English Wikipedia were: <a href="/wiki/George_W._Bush" title="George W. Bush">George W. Bush</a>, <a href="/wiki/Anarchism" title="Anarchism">anarchism</a>, <a href="/wiki/Muhammad" title="Muhammad">Muhammad</a>, <a href="/wiki/List_of_WWE_personnel" title="List of WWE personnel">list of WWE personnel</a>, <a href="/wiki/Global_warming" title="Global warming">global warming</a>, <a href="/wiki/Circumcision" title="Circumcision">circumcision</a>, <a href="/wiki/United_States" title="United States">United States</a>, <a href="/wiki/Jesus" title="Jesus">Jesus</a>, <a href="/wiki/Race_and_intelligence" title="Race and intelligence">race and intelligence</a>, and <a href="/wiki/Christianity" title="Christianity">Christianity</a>.<sup id="cite_ref-Gross_30-0" class="reference"><a href="#cite_note-Gross-30">[30]</a></sup></p>
                <h3><span class="mw-headline" id="Varieties_of_English">Varieties of English</span></h3>
                <p>One controversy in the English Wikipedia concerns which <a href="/wiki/List_of_dialects_of_the_English_language" title="List of dialects of the English language">national variety</a> of the English language is to be preferred, with the most commonly advocated candidates being <a href="/wiki/American_English" title="American English">American English</a> and <a href="/wiki/British_English" title="British English">British English</a>.<sup id="cite_ref-31" class="reference"><a href="#cite_note-31">[31]</a></sup> Perennial suggestions range from standardizing upon a single form of English to <a href="/wiki/Fork_(software)" class="mw-redirect" title="Fork (software)">forking</a> the English Wikipedia project. A style guideline states, "the English Wikipedia has no general preference for a major national variety of the language" and "an article on a topic that has strong ties to a particular English-speaking nation uses the appropriate variety of English for that nation".<sup id="cite_ref-32" class="reference"><a href="#cite_note-32">[32]</a></sup> An article should use spelling and grammar variants consistently; for example, <i>color</i> and <i>colour</i> are not to be used in the same article, since they represent American and British English, respectively. The guide also states that an article must remain in its original national variant.</p>
                <p>There has been a <a href="/wiki/Chinese_Wikipedia#Automatic_conversion_between_traditional_and_simplified_Chinese_characters" title="Chinese Wikipedia">similar issue in the Chinese language Wikipedia</a> concerning regional differences in writing. Efforts at a language fork for <a href="/wiki/Portuguese_Wikipedia" title="Portuguese Wikipedia">Portuguese Wikipedia</a> have failed, and succeeded for <a href="/wiki/Norwegian_Wikipedia" title="Norwegian Wikipedia">Norwegian Wikipedia</a>.</p>
                <p><a href="/wiki/Andrew_Lih" title="Andrew Lih">Andrew Lih</a> wrote that the English Wikipedia "didn't have the chance to go through a debate over whether there should be a British English Wikipedia or an American English Wikipedia" because the English Wikipedia was the original edition.<sup id="cite_ref-33" class="reference"><a href="#cite_note-33">[33]</a></sup><sup class="noprint Inline-Template" style="margin-left:0.1em; white-space:nowrap;">[<i><a href="/wiki/Wikipedia:Please_clarify" title="Wikipedia:Please clarify"><span title="How does being the original edition prevent debate? (February 2015)">clarification needed</span></a></i>]</sup> Editors agreed to use U.S. spellings for primarily American topics and British spellings for primarily British topics. In 2009 Lih wrote, "No doubt, American spellings tend to dominate by default just because of sheer numbers."<sup id="cite_ref-34" class="reference"><a href="#cite_note-34">[34]</a></sup></p>
                <h2><span id="Wikiprojects.2C_and_assessments_of_articles.27_importance_and_quality"></span><span class="mw-headline" id="Wikiprojects,_and_assessments_of_articles'_importance_and_quality">Wikiprojects, and assessments of articles' importance and quality</span></h2>
                <div role="note" class="hatnote navigation-not-searchable">Main article: <a href="/wiki/WikiProject" title="WikiProject">WikiProject</a></div>
                <p>A "<a href="/wiki/WikiProject" title="WikiProject">WikiProject</a>" is a <a href="/wiki/Social_group" title="Social group">group</a> of contributors who want to work together as a team to improve Wikipedia. These groups often focus on a specific topic area (for example, <a href="/wiki/Women%27s_history" title="Women's history">women's history</a>), a specific location or a specific kind of task (for example, checking newly created pages). The English Wikipedia currently has over <a href="/wiki/Wikipedia:Database_reports/WikiProjects_by_changes" title="Wikipedia:Database reports/WikiProjects by changes">2,000 WikiProjects</a> and activity varies.<sup id="cite_ref-35" class="reference"><a href="#cite_note-35">[35]</a></sup></p>
                <p>In 2007, in preparation for producing a print version, the English Wikipedia introduced an assessment scale of the quality of articles.<sup id="cite_ref-WP_1.0_editorial_team_1_36-0" class="reference"><a href="#cite_note-WP_1.0_editorial_team_1-36">[36]</a></sup> Articles are rated by WikiProjects. The range of quality classes begins with "Stub" (very short pages), followed by "Start", "C" and "B" (in increasing order of quality). Community peer review is needed for the article to enter one of the highest quality classes: either "<a href="/wiki/Wikipedia:Good_articles" title="Wikipedia:Good articles">good article</a>", "A" or the highest, "<a href="/wiki/Wikipedia:Featured_articles" title="Wikipedia:Featured articles">featured article</a>". Of the about 4.4 million articles and lists assessed as of March 2015, a little more than 5,000 (0.12%) are featured articles, and fewer than 2,000 (0.04%) are featured lists. One featured article per day, as selected by editors, appears on the <a href="/wiki/Main_page" class="mw-redirect" title="Main page">main page</a> of Wikipedia.<sup id="cite_ref-FMonday_feat_article_patterns_1_37-0" class="reference"><a href="#cite_note-FMonday_feat_article_patterns_1-37">[37]</a></sup><sup id="cite_ref-IBM_feat_articles_hidden_pattern_1_38-0" class="reference"><a href="#cite_note-IBM_feat_articles_hidden_pattern_1-38">[38]</a></sup></p>
                <p>The articles can also be rated as per "importance" as judged by a WikiProject. Currently, there are 5 importance categories: "low", "mid", "high", "top", and "???" for unclassified/uncertain level. For a particular article, different WikiProjects may assign different importance levels.</p>
                <p>The <a href="/wiki/Wikipedia:Version_1.0_Editorial_Team" title="Wikipedia:Version 1.0 Editorial Team">Wikipedia Version 1.0 Editorial Team</a> has developed a table (shown below) that displays data of all rated articles by quality and importance, on the English Wikipedia. <i>If an article or list receives different ratings by two or more WikiProjects, then the highest rating is used in the table, pie-charts, and bar-chart</i>. The software regularly auto-updates the data.</p>
                <p>Researcher Giacomo Poderi found that articles tend to reach featured status via the intensive work of a few editors.<sup id="cite_ref-Poderi_Giacomo_feat_articles_1_39-0" class="reference"><a href="#cite_note-Poderi_Giacomo_feat_articles_1-39">[39]</a></sup> A 2010 study found unevenness in quality among featured articles and concluded that the community process is ineffective in assessing the quality of articles.<sup id="cite_ref-FMonday_WP_quality_control_1_40-0" class="reference"><a href="#cite_note-FMonday_WP_quality_control_1-40">[40]</a></sup></p>
                <div class="thumb tright" style="">
                    <div class="thumbinner" style="width:200px">
                        <div style="background-color:white;margin:auto;position:relative;width:200px;height:200px;overflow:hidden;border-radius:100px;border:1px solid black">
                            <div class="transborder" style="position:absolute;width:100px;line-height:0;left:0; top:0; border-width:0 200px 200px 0; border-color:black"></div>
                            <div class="transborder" style="position:absolute;width:100px;line-height:0;left:100px; top:100px; border-width:100px 0 0 138.91898936466px; border-left-color:purple"></div>
                            <div style="position:absolute;line-height:0;border-style:solid;left:0;top:0;border-width:0 200px 100px 0;border-color:purple"></div>
                            <div style="position:absolute;line-height:0;border-style:solid;left:0;top:0;border-width:0 100px 200px 0;border-color:purple"></div>
                            <div class="transborder" style="position:absolute;width:100px;line-height:0;left:100px; top:100px; border-width:100px 0 0 87.272449203032px; border-left-color:red"></div>
                            <div style="position:absolute;line-height:0;border-style:solid;left:0;top:0;border-width:0 200px 100px 0;border-color:red"></div>
                            <div style="position:absolute;line-height:0;border-style:solid;left:0;top:0;border-width:0 100px 200px 0;border-color:red"></div>
                            <div class="transborder" style="position:absolute;width:100px;line-height:0;right:100px; top:0; border-width:0 58.379104347296px 100px 0; border-right-color:orange"></div>
                            <div style="position:absolute;line-height:0;border-style:solid;right:0;top:0;border-width:0 100px 100px 0;border-color:orange"></div>
                            <div class="transborder" style="position:absolute;width:100px;line-height:0;left:100px; top:57.422070843493px; border-width:0 0 42.577929156507px 90.482705246602px; border-bottom-color:yellow"></div>
                            <div class="transborder" style="position:absolute;width:100px;line-height:0;left:100px; top:83.240528579448px; border-width:0 0 16.759471420552px 98.585597922332px; border-bottom-color:lightgreen"></div>
                            <div class="transborder" style="position:absolute;width:100px;line-height:0;left:100px; top:95.728733787886px; border-width:0 0 4.2712662121137px 99.90873978259px; border-bottom-color:darkgreen"></div>
                            <div class="transborder" style="position:absolute;width:100px;line-height:0;left:100px; top:98.869050755034px; border-width:0 0 1.1309492449658px 99.993604564519px; border-bottom-color:lightblue"></div>
                            <div class="transborder" style="position:absolute;width:100px;line-height:0;left:100px; top:99.057536156686px; border-width:0 0 0.9424638433144px 99.995558710895px; border-bottom-color:indigo"></div>
                            <div class="transborder" style="position:absolute;width:100px;line-height:0;left:100px; top:99.308855118778px; border-width:0 0 0.69114488122233px 99.997611565243px; border-bottom-color:violet"></div>
                        </div>
                        <div class="thumbcaption">
                            <p><b>Quality-wise distribution of over 5.5 million articles and lists on the English Wikipedia, as of 29&nbsp;January&nbsp;2017<sup class="plainlinks noexcerpt noprint asof-tag update" style="display:none;"><a class="external text" href="//en.wikipedia.org/w/index.php?title=English_Wikipedia&amp;action=edit">[update]</a></sup></b><sup id="cite_ref-en.wikipedia_41-0" class="reference"><a href="#cite_note-en.wikipedia-41">[41]</a></sup></p>
                            <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column"><span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background-color:violet; color:black; font-size:100%; text-align:center;">&nbsp;</span>&nbsp;Featured articles (0.11%)</div>
                            <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column"><span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background-color:indigo; color:black; font-size:100%; text-align:center;">&nbsp;</span>&nbsp;Featured lists (0.04%)</div>
                            <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column"><span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background-color:lightblue; color:black; font-size:100%; text-align:center;">&nbsp;</span>&nbsp;A class (0.03%)</div>
                            <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column"><span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background-color:darkgreen; color:black; font-size:100%; text-align:center;">&nbsp;</span>&nbsp;Good articles (0.50%)</div>
                            <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column"><span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background-color:lightgreen; color:black; font-size:100%; text-align:center;">&nbsp;</span>&nbsp;B class (2.00%)</div>
                            <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column"><span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background-color:yellow; color:black; font-size:100%; text-align:center;">&nbsp;</span>&nbsp;C class (4.32%)</div>
                            <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column"><span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background-color:orange; color:black; font-size:100%; text-align:center;">&nbsp;</span>&nbsp;Start class (26.41%)</div>
                            <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column"><span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background-color:red; color:black; font-size:100%; text-align:center;">&nbsp;</span>&nbsp;Stub class (53.01%)</div>
                            <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column"><span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background-color:purple; color:black; font-size:100%; text-align:center;">&nbsp;</span>&nbsp;Lists (3.65%)</div>
                            <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column"><span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background-color:black; color:black; font-size:100%; text-align:center;">&nbsp;</span>&nbsp;Unassessed (9.94%)</div>
                        </div>
                    </div>
                </div>
                <div style="float: right; padding-left: 7 px;">
                    <div class="thumb tright" style="">
                        <div class="thumbinner" style="width:200px">
                            <div style="background-color:white;margin:auto;position:relative;width:200px;height:200px;overflow:hidden;border-radius:100px;border:1px solid black">
                                <div class="transborder" style="position:absolute;width:100px;line-height:0;left:0; top:0; border-width:0 200px 200px 0; border-color:fuchsia"></div>
                                <div class="transborder" style="position:absolute;width:100px;line-height:0;right:100px; top:100px; border-width:90.482705246602px 42.577929156507px 0 0; border-top-color:yellow"></div>
                                <div style="position:absolute;line-height:0;border-style:solid;left:0;top:0;border-width:0 200px 100px 0;border-color:yellow"></div>
                                <div class="transborder" style="position:absolute;width:100px;line-height:0;left:100px; top:14.507002124505px; border-width:0 0 85.492997875495px 51.874341579056px; border-bottom-color:blue"></div>
                                <div class="transborder" style="position:absolute;width:100px;line-height:0;left:100px; top:74.462173969233px; border-width:0 0 25.537826030767px 96.68412197265px; border-bottom-color:green"></div>
                                <div class="transborder" style="position:absolute;width:100px;line-height:0;left:100px; top:94.285416252053px; border-width:0 0 5.7145837479469px 99.836584139221px; border-bottom-color:red"></div>
                            </div>
                            <div class="thumbcaption">
                                <p><b>Importance-wise distribution of over 5.5 million articles and lists on the English Wikipedia, as of 29&nbsp;January&nbsp;2017<sup class="plainlinks noexcerpt noprint asof-tag update" style="display:none;"><a class="external text" href="//en.wikipedia.org/w/index.php?title=English_Wikipedia&amp;action=edit">[update]</a></sup></b><sup id="cite_ref-en.wikipedia_41-1" class="reference"><a href="#cite_note-en.wikipedia-41">[41]</a></sup></p>
                                <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column"><span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background-color:red; color:black; font-size:100%; text-align:center;">&nbsp;</span>&nbsp;Top (0.91%)</div>
                                <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column"><span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background-color:green; color:black; font-size:100%; text-align:center;">&nbsp;</span>&nbsp;High (3.20%)</div>
                                <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column"><span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background-color:blue; color:black; font-size:100%; text-align:center;">&nbsp;</span>&nbsp;Medium (12.21%)</div>
                                <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column"><span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background-color:yellow; color:black; font-size:100%; text-align:center;">&nbsp;</span>&nbsp;Low (51.68%)</div>
                                <div class="legend" style="-webkit-column-break-inside: avoid;page-break-inside: avoid;break-inside: avoid-column"><span class="legend-color" style="display:inline-block; width:1.5em; height:1.5em; margin:1px 0; border:1px solid black; background-color:fuchsia; color:black; font-size:100%; text-align:center;">&nbsp;</span>&nbsp;??? (32.00%)</div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="ratingstable wikitable plainlinks" style="text-align: right; margin-left: auto; margin-right: auto;">
                    <tbody><tr>
                        <th colspan="7" class="ratingstabletitle">All rated articles by quality and importance</th>
                    </tr>
                    <tr>
                        <th rowspan="2" style="vertical-align: bottom"><b>Quality</b></th>
                        <th colspan="6"><b>Importance</b></th>
                    </tr>
                    <tr>
                        <th class="import-top" style="text-align:center; background: #ff00ff;"><b><a href="/wiki/Category:Top-importance_articles" title="Category:Top-importance articles">Top</a></b></th>
                        <th class="import-high" style="text-align:center; background: #ff88ff;"><b><a href="/wiki/Category:High-importance_articles" title="Category:High-importance articles">High</a></b></th>
                        <th class="import-mid" style="text-align:center; background: #ffbbff;"><b><a href="/wiki/Category:Mid-importance_articles" title="Category:Mid-importance articles">Mid</a></b></th>
                        <th class="import-low" style="text-align:center; background: #ffddff;"><b><a href="/wiki/Category:Low-importance_articles" title="Category:Low-importance articles">Low</a></b></th>
                        <th class="assess-" style="background: transparent; text-align: center;"><b><a href="/wiki/Category:Unassessed_articles" title="Category:Unassessed articles">???</a></b></th>
                        <th style="text-align: center;"><b>Total</b></th>
                    </tr>
                    <tr>
                        <td class="assess-fa" style="background: #6699ff; text-align: center;"><span style="" title="Featured Article"><a href="/wiki/File:Featured_article_star.svg" class="image" title="Featured article"><img alt="Featured article" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Featured_article_star.svg/16px-Featured_article_star.svg.png" width="16" height="16" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Featured_article_star.svg/24px-Featured_article_star.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Featured_article_star.svg/32px-Featured_article_star.svg.png 2x" data-file-width="180" data-file-height="180"></a></span> <b><a href="/wiki/Category:FA-Class_articles" title="Category:FA-Class articles">FA</a></b></td>
                        <td>1,244</td>
                        <td>1,907</td>
                        <td>1,800</td>
                        <td>1,179</td>
                        <td>195</td>
                        <td><b>6,325</b></td>
                    </tr>
                    <tr>
                        <td class="assess-fl" style="background: #6699ff; text-align: center;"><span style="" title="Featured List"><a href="/wiki/File:Featured_article_star.svg" class="image" title="Featured list"><img alt="Featured list" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Featured_article_star.svg/16px-Featured_article_star.svg.png" width="16" height="16" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Featured_article_star.svg/24px-Featured_article_star.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Featured_article_star.svg/32px-Featured_article_star.svg.png 2x" data-file-width="180" data-file-height="180"></a></span> <b><a href="/wiki/Category:FL-Class_articles" title="Category:FL-Class articles">FL</a></b></td>
                        <td>146</td>
                        <td>587</td>
                        <td>693</td>
                        <td>605</td>
                        <td>124</td>
                        <td><b>2,155</b></td>
                    </tr>
                    <tr>
                        <td class="assess-a" style="background: #66ffff; text-align:center;"><span style="" title="A-Class Article"><a href="/wiki/File:Symbol_a_class.svg" class="image" title="A-Class article"><img alt="A-Class article" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/25/Symbol_a_class.svg/16px-Symbol_a_class.svg.png" width="16" height="16" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/25/Symbol_a_class.svg/24px-Symbol_a_class.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/25/Symbol_a_class.svg/32px-Symbol_a_class.svg.png 2x" data-file-width="180" data-file-height="185"></a></span> <b><a href="/wiki/Category:A-Class_articles" title="Category:A-Class articles">A</a></b></td>
                        <td>238</td>
                        <td>450</td>
                        <td>608</td>
                        <td>391</td>
                        <td>85</td>
                        <td><b>1,772</b></td>
                    </tr>
                    <tr>
                        <td class="assess-ga" style="background: #66ff66; text-align: center;"><span style="" title="Good Article"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/9/94/Symbol_support_vote.svg/16px-Symbol_support_vote.svg.png" title="Good article" width="16" height="16" srcset="//upload.wikimedia.org/wikipedia/en/thumb/9/94/Symbol_support_vote.svg/24px-Symbol_support_vote.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/9/94/Symbol_support_vote.svg/32px-Symbol_support_vote.svg.png 2x" data-file-width="180" data-file-height="185"></span> <b><a href="/wiki/Category:GA-Class_articles" title="Category:GA-Class articles">GA</a></b></td>
                        <td>2,212</td>
                        <td>5,055</td>
                        <td>9,831</td>
                        <td>10,994</td>
                        <td>1,794</td>
                        <td><b>29,886</b></td>
                    </tr>
                    <tr>
                        <td class="assess-b" style="background: #b2ff66; text-align: center;"><b><a href="/wiki/Category:B-Class_articles" title="Category:B-Class articles">B</a></b></td>
                        <td>12,499</td>
                        <td>23,713</td>
                        <td>36,431</td>
                        <td>30,294</td>
                        <td>14,867</td>
                        <td><b>117,804</b></td>
                    </tr>
                    <tr>
                        <td class="assess-c" style="background: #ffff66; text-align: center;"><b><a href="/wiki/Category:C-Class_articles" title="Category:C-Class articles">C</a></b></td>
                        <td>10,936</td>
                        <td>32,211</td>
                        <td>71,954</td>
                        <td>102,633</td>
                        <td>47,225</td>
                        <td><b>264,959</b></td>
                    </tr>
                    <tr>
                        <td class="assess-start" style="background: #ffaa66; text-align: center;"><b><a href="/wiki/Category:Start-Class_articles" title="Category:Start-Class articles">Start</a></b></td>
                        <td>17,661</td>
                        <td>79,074</td>
                        <td>320,257</td>
                        <td>863,983</td>
                        <td>313,342</td>
                        <td><b>1,594,317</b></td>
                    </tr>
                    <tr>
                        <td class="assess-stub" style="background: #ff6666; text-align: center;"><b><a href="/wiki/Category:Stub-Class_articles" title="Category:Stub-Class articles">Stub</a></b></td>
                        <td>4,253</td>
                        <td>31,134</td>
                        <td>235,784</td>
                        <td>1,977,386</td>
                        <td>857,527</td>
                        <td><b>3,106,084</b></td>
                    </tr>
                    <tr>
                        <td class="assess-list" style="background: #aa88ff; text-align: center;"><b><a href="/wiki/Category:List-Class_articles" title="Category:List-Class articles">List</a></b></td>
                        <td>3,197</td>
                        <td>11,896</td>
                        <td>36,569</td>
                        <td>101,183</td>
                        <td>61,657</td>
                        <td><b>214,502</b></td>
                    </tr>
                    <tr>
                        <td><b>Assessed</b></td>
                        <td>52,386</td>
                        <td>186,027</td>
                        <td>713,927</td>
                        <td>3,088,648</td>
                        <td>1,296,816</td>
                        <td><b>5,337,804</b></td>
                    </tr>
                    <tr>
                        <td class="assess-unassessed" style="background: transparent; text-align:center;"><b><a href="/wiki/Category:Unassessed_articles" title="Category:Unassessed articles">Unassessed</a></b></td>
                        <td>126</td>
                        <td>446</td>
                        <td>1,802</td>
                        <td>16,608</td>
                        <td>561,146</td>
                        <td><b>580,128</b></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;"><b>Total</b></td>
                        <td><b>52,512</b></td>
                        <td><b>186,473</b></td>
                        <td><b>715,729</b></td>
                        <td><b>3,105,256</b></td>
                        <td><b>1,857,962</b></td>
                        <td><b>5,917,932</b></td>
                    </tr>
                    </tbody></table>
                <div style="margin-top:1em;max-width:800px;" class="chart noresize">
                    <div style="position:relative;min-height:700px;min-width:800px;max-width:800px;">
                        <div style="float:right;position:relative;min-height:620px;min-width:700px;max-width:700px;border-left:1px black solid;border-bottom:1px black solid;">
                            <div style="position:absolute;left:51px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:violet;-webkit-print-color-adjust:exact;border:1px solid violet;border-bottom:none;overflow:hidden;" title="Featured articles: 1,173"></div>
                            <div style="position:absolute;left:191px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:violet;-webkit-print-color-adjust:exact;border:1px solid violet;border-bottom:none;overflow:hidden;" title="Featured articles: 1,804"></div>
                            <div style="position:absolute;left:331px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:violet;-webkit-print-color-adjust:exact;border:1px solid violet;border-bottom:none;overflow:hidden;" title="Featured articles: 1,708"></div>
                            <div style="position:absolute;left:471px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:violet;-webkit-print-color-adjust:exact;border:1px solid violet;border-bottom:none;overflow:hidden;" title="Featured articles: 1,060"></div>
                            <div style="position:absolute;left:611px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:violet;-webkit-print-color-adjust:exact;border:1px solid violet;border-bottom:none;overflow:hidden;" title="Featured articles: 187"></div>
                            <div style="position:absolute;left:51px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:indigo;-webkit-print-color-adjust:exact;border:1px solid indigo;border-bottom:none;overflow:hidden;" title="Featured lists: 141"></div>
                            <div style="position:absolute;left:191px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:indigo;-webkit-print-color-adjust:exact;border:1px solid indigo;border-bottom:none;overflow:hidden;" title="Featured lists: 562"></div>
                            <div style="position:absolute;left:331px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:indigo;-webkit-print-color-adjust:exact;border:1px solid indigo;border-bottom:none;overflow:hidden;" title="Featured lists: 661"></div>
                            <div style="position:absolute;left:471px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:indigo;-webkit-print-color-adjust:exact;border:1px solid indigo;border-bottom:none;overflow:hidden;" title="Featured lists: 600"></div>
                            <div style="position:absolute;left:611px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:indigo;-webkit-print-color-adjust:exact;border:1px solid indigo;border-bottom:none;overflow:hidden;" title="Featured lists: 118"></div>
                            <div style="position:absolute;left:51px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:lightblue;-webkit-print-color-adjust:exact;border:1px solid lightblue;border-bottom:none;overflow:hidden;" title="A-class articles: 221"></div>
                            <div style="position:absolute;left:191px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:lightblue;-webkit-print-color-adjust:exact;border:1px solid lightblue;border-bottom:none;overflow:hidden;" title="A-class articles: 427"></div>
                            <div style="position:absolute;left:331px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:lightblue;-webkit-print-color-adjust:exact;border:1px solid lightblue;border-bottom:none;overflow:hidden;" title="A-class articles: 579"></div>
                            <div style="position:absolute;left:471px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:lightblue;-webkit-print-color-adjust:exact;border:1px solid lightblue;border-bottom:none;overflow:hidden;" title="A-class articles: 371"></div>
                            <div style="position:absolute;left:611px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:lightblue;-webkit-print-color-adjust:exact;border:1px solid lightblue;border-bottom:none;overflow:hidden;" title="A-class articles: 80"></div>
                            <div style="position:absolute;left:51px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:darkgreen;-webkit-print-color-adjust:exact;border:1px solid darkgreen;border-bottom:none;overflow:hidden;" title="Good articles: 2,089"></div>
                            <div style="position:absolute;left:191px;top:619px;height:0px;min-width:36px;max-width:36px;background-color:darkgreen;-webkit-print-color-adjust:exact;border:1px solid darkgreen;border-bottom:none;overflow:hidden;" title="Good articles: 4,767"></div>
                            <div style="position:absolute;left:331px;top:618px;height:1px;min-width:36px;max-width:36px;background-color:darkgreen;-webkit-print-color-adjust:exact;border:1px solid darkgreen;border-bottom:none;overflow:hidden;" title="Good articles: 9,291"></div>
                            <div style="position:absolute;left:471px;top:618px;height:1px;min-width:36px;max-width:36px;background-color:darkgreen;-webkit-print-color-adjust:exact;border:1px solid darkgreen;border-bottom:none;overflow:hidden;" title="Good articles: 10,076"></div>
                            <div style="position:absolute;left:611px;top:620px;height:-1px;min-width:36px;max-width:36px;background-color:darkgreen;-webkit-print-color-adjust:exact;border:1px solid darkgreen;border-bottom:none;overflow:hidden;" title="Good articles: 1,692"></div>
                            <div style="position:absolute;left:51px;top:618px;height:1px;min-width:36px;max-width:36px;background-color:lightgreen;-webkit-print-color-adjust:exact;border:1px solid lightgreen;border-bottom:none;overflow:hidden;" title="B-class articles: 12,033"></div>
                            <div style="position:absolute;left:191px;top:614px;height:4px;min-width:36px;max-width:36px;background-color:lightgreen;-webkit-print-color-adjust:exact;border:1px solid lightgreen;border-bottom:none;overflow:hidden;" title="B-class articles: 22,850"></div>
                            <div style="position:absolute;left:331px;top:611px;height:6px;min-width:36px;max-width:36px;background-color:lightgreen;-webkit-print-color-adjust:exact;border:1px solid lightgreen;border-bottom:none;overflow:hidden;" title="B-class articles: 34,918"></div>
                            <div style="position:absolute;left:471px;top:612px;height:5px;min-width:36px;max-width:36px;background-color:lightgreen;-webkit-print-color-adjust:exact;border:1px solid lightgreen;border-bottom:none;overflow:hidden;" title="B-class articles: 27,805"></div>
                            <div style="position:absolute;left:611px;top:617px;height:2px;min-width:36px;max-width:36px;background-color:lightgreen;-webkit-print-color-adjust:exact;border:1px solid lightgreen;border-bottom:none;overflow:hidden;" title="B-class articles: 13,632"></div>
                            <div style="position:absolute;left:51px;top:615px;height:1px;min-width:36px;max-width:36px;background-color:yellow;-webkit-print-color-adjust:exact;border:1px solid yellow;border-bottom:none;overflow:hidden;" title="C-class articles: 10,253"></div>
                            <div style="position:absolute;left:191px;top:608px;height:5px;min-width:36px;max-width:36px;background-color:yellow;-webkit-print-color-adjust:exact;border:1px solid yellow;border-bottom:none;overflow:hidden;" title="C-class articles: 29,618"></div>
                            <div style="position:absolute;left:331px;top:597px;height:13px;min-width:36px;max-width:36px;background-color:yellow;-webkit-print-color-adjust:exact;border:1px solid yellow;border-bottom:none;overflow:hidden;" title="C-class articles: 66,133"></div>
                            <div style="position:absolute;left:471px;top:593px;height:18px;min-width:36px;max-width:36px;background-color:yellow;-webkit-print-color-adjust:exact;border:1px solid yellow;border-bottom:none;overflow:hidden;" title="C-class articles: 91,622"></div>
                            <div style="position:absolute;left:611px;top:608px;height:8px;min-width:36px;max-width:36px;background-color:yellow;-webkit-print-color-adjust:exact;border:1px solid yellow;border-bottom:none;overflow:hidden;" title="C-class articles: 43,202"></div>
                            <div style="position:absolute;left:51px;top:611px;height:3px;min-width:36px;max-width:36px;background-color:orange;-webkit-print-color-adjust:exact;border:1px solid orange;border-bottom:none;overflow:hidden;" title="Start-class articles: 17,198"></div>
                            <div style="position:absolute;left:191px;top:592px;height:15px;min-width:36px;max-width:36px;background-color:orange;-webkit-print-color-adjust:exact;border:1px solid orange;border-bottom:none;overflow:hidden;" title="Start-class articles: 75,703"></div>
                            <div style="position:absolute;left:331px;top:534px;height:62px;min-width:36px;max-width:36px;background-color:orange;-webkit-print-color-adjust:exact;border:1px solid orange;border-bottom:none;overflow:hidden;" title="Start-class articles: 305,141"></div>
                            <div style="position:absolute;left:471px;top:431px;height:161px;min-width:36px;max-width:36px;background-color:orange;-webkit-print-color-adjust:exact;border:1px solid orange;border-bottom:none;overflow:hidden;" title="Start-class articles: 783,520"></div>
                            <div style="position:absolute;left:611px;top:548px;height:59px;min-width:36px;max-width:36px;background-color:orange;-webkit-print-color-adjust:exact;border:1px solid orange;border-bottom:none;overflow:hidden;" title="Start-class articles: 290,296"></div>
                            <div style="position:absolute;left:51px;top:611px;height:0px;min-width:36px;max-width:36px;background-color:red;-webkit-print-color-adjust:exact;border:1px solid red;border-bottom:none;overflow:hidden;" title="Stub articles: 4,225"></div>
                            <div style="position:absolute;left:191px;top:586px;height:5px;min-width:36px;max-width:36px;background-color:red;-webkit-print-color-adjust:exact;border:1px solid red;border-bottom:none;overflow:hidden;" title="Stub articles: 30,940"></div>
                            <div style="position:absolute;left:331px;top:487px;height:46px;min-width:36px;max-width:36px;background-color:red;-webkit-print-color-adjust:exact;border:1px solid red;border-bottom:none;overflow:hidden;" title="Stub articles: 225,862"></div>
                            <div style="position:absolute;left:471px;top:47px;height:383px;min-width:36px;max-width:36px;background-color:red;-webkit-print-color-adjust:exact;border:1px solid red;border-bottom:none;overflow:hidden;" title="Stub articles: 1,855,720"></div>
                            <div style="position:absolute;left:611px;top:375px;height:172px;min-width:36px;max-width:36px;background-color:red;-webkit-print-color-adjust:exact;border:1px solid red;border-bottom:none;overflow:hidden;" title="Stub articles: 837,412"></div>
                            <div style="position:absolute;left:51px;top:610px;height:0px;min-width:36px;max-width:36px;background-color:purple;-webkit-print-color-adjust:exact;border:1px solid purple;border-bottom:none;overflow:hidden;" title="Lists: 3,009"></div>
                            <div style="position:absolute;left:191px;top:584px;height:1px;min-width:36px;max-width:36px;background-color:purple;-webkit-print-color-adjust:exact;border:1px solid purple;border-bottom:none;overflow:hidden;" title="Lists: 11,220"></div>
                            <div style="position:absolute;left:331px;top:480px;height:6px;min-width:36px;max-width:36px;background-color:purple;-webkit-print-color-adjust:exact;border:1px solid purple;border-bottom:none;overflow:hidden;" title="Lists: 34,137"></div>
                            <div style="position:absolute;left:471px;top:29px;height:18px;min-width:36px;max-width:36px;background-color:purple;-webkit-print-color-adjust:exact;border:1px solid purple;border-bottom:none;overflow:hidden;" title="Lists: 93,404"></div>
                            <div style="position:absolute;left:611px;top:362px;height:12px;min-width:36px;max-width:36px;background-color:purple;-webkit-print-color-adjust:exact;border:1px solid purple;border-bottom:none;overflow:hidden;" title="Lists: 61,514"></div>
                            <div style="position:absolute;left:51px;top:610px;height:-1px;min-width:36px;max-width:36px;background-color:black;-webkit-print-color-adjust:exact;border:1px solid black;border-bottom:none;overflow:hidden;" title="Unassessed articles and lists: 139"></div>
                            <div style="position:absolute;left:191px;top:584px;height:-1px;min-width:36px;max-width:36px;background-color:black;-webkit-print-color-adjust:exact;border:1px solid black;border-bottom:none;overflow:hidden;" title="Unassessed articles and lists: 407"></div>
                            <div style="position:absolute;left:331px;top:480px;height:-1px;min-width:36px;max-width:36px;background-color:black;-webkit-print-color-adjust:exact;border:1px solid black;border-bottom:none;overflow:hidden;" title="Unassessed articles and lists: 1,787"></div>
                            <div style="position:absolute;left:471px;top:26px;height:2px;min-width:36px;max-width:36px;background-color:black;-webkit-print-color-adjust:exact;border:1px solid black;border-bottom:none;overflow:hidden;" title="Unassessed articles and lists: 16,209"></div>
                            <div style="position:absolute;left:611px;top:252px;height:110px;min-width:36px;max-width:36px;background-color:black;-webkit-print-color-adjust:exact;border:1px solid black;border-bottom:none;overflow:hidden;" title="Unassessed articles and lists: 535,499"></div>
                        </div>
                        <div style="position:absolute;height:620px;min-width:100px;max-width:100px;">
                            <div style="position:absolute;height=20px;text-align:right;vertical-align:middle;width:90px;top:507px;padding:0 2px">500,000</div>
                            <div style="position:absolute;height=1px;min-width:5px;top:517px;left:96px;border:1px solid black;"></div>
                            <div style="position:absolute;height=20px;text-align:right;vertical-align:middle;width:90px;top:403px;padding:0 2px">1,000,000</div>
                            <div style="position:absolute;height=1px;min-width:5px;top:413px;left:96px;border:1px solid black;"></div>
                            <div style="position:absolute;height=20px;text-align:right;vertical-align:middle;width:90px;top:300px;padding:0 2px">1,500,000</div>
                            <div style="position:absolute;height=1px;min-width:5px;top:310px;left:96px;border:1px solid black;"></div>
                            <div style="position:absolute;height=20px;text-align:right;vertical-align:middle;width:90px;top:197px;padding:0 2px">2,000,000</div>
                            <div style="position:absolute;height=1px;min-width:5px;top:207px;left:96px;border:1px solid black;"></div>
                            <div style="position:absolute;height=20px;text-align:right;vertical-align:middle;width:90px;top:93px;padding:0 2px">2,500,000</div>
                            <div style="position:absolute;height=1px;min-width:5px;top:103px;left:96px;border:1px solid black;"></div>
                            <div style="position:absolute;height=20px;text-align:right;vertical-align:middle;width:90px;top:-10px;padding:0 2px">3,000,000</div>
                            <div style="position:absolute;height=1px;min-width:5px;top:0px;left:96px;border:1px solid black;"></div>
                        </div>
                        <div style="position:absolute;top:620px;left:100px;width:700px;">
                            <div style="position:absolute;left:5px;top:10px;min-width:130px;max-width:130px;text-align:center;vertical-align:top;">Top</div>
                            <div style="position:absolute;left:70px;height:10px;width:1px;border-left:1px solid black;"></div>
                            <div style="position:absolute;left:145px;top:10px;min-width:130px;max-width:130px;text-align:center;vertical-align:top;">High</div>
                            <div style="position:absolute;left:210px;height:10px;width:1px;border-left:1px solid black;"></div>
                            <div style="position:absolute;left:285px;top:10px;min-width:130px;max-width:130px;text-align:center;vertical-align:top;">Medium</div>
                            <div style="position:absolute;left:350px;height:10px;width:1px;border-left:1px solid black;"></div>
                            <div style="position:absolute;left:425px;top:10px;min-width:130px;max-width:130px;text-align:center;vertical-align:top;">Low</div>
                            <div style="position:absolute;left:490px;height:10px;width:1px;border-left:1px solid black;"></div>
                            <div style="position:absolute;left:565px;top:10px;min-width:130px;max-width:130px;text-align:center;vertical-align:top;">???</div>
                            <div style="position:absolute;left:630px;height:10px;width:1px;border-left:1px solid black;"></div>
                        </div>
                    </div>
                    <div>
                        <ul style="width:100%;list-style:none;-webkit-column-width:12em;-moz-column-width:12em;column-width:12em;">
                            <li><span style="padding:0 1em;background-color:violet;border:1px solid violet;margin-right:1em;-webkit-print-color-adjust:exact;">&nbsp;</span> Featured articles</li>
                            <li><span style="padding:0 1em;background-color:indigo;border:1px solid indigo;margin-right:1em;-webkit-print-color-adjust:exact;">&nbsp;</span> Featured lists</li>
                            <li><span style="padding:0 1em;background-color:lightblue;border:1px solid lightblue;margin-right:1em;-webkit-print-color-adjust:exact;">&nbsp;</span> A-class articles</li>
                            <li><span style="padding:0 1em;background-color:darkgreen;border:1px solid darkgreen;margin-right:1em;-webkit-print-color-adjust:exact;">&nbsp;</span> Good articles</li>
                            <li><span style="padding:0 1em;background-color:lightgreen;border:1px solid lightgreen;margin-right:1em;-webkit-print-color-adjust:exact;">&nbsp;</span> B-class articles</li>
                            <li><span style="padding:0 1em;background-color:yellow;border:1px solid yellow;margin-right:1em;-webkit-print-color-adjust:exact;">&nbsp;</span> C-class articles</li>
                            <li><span style="padding:0 1em;background-color:orange;border:1px solid orange;margin-right:1em;-webkit-print-color-adjust:exact;">&nbsp;</span> Start-class articles</li>
                            <li><span style="padding:0 1em;background-color:red;border:1px solid red;margin-right:1em;-webkit-print-color-adjust:exact;">&nbsp;</span> Stub articles</li>
                            <li><span style="padding:0 1em;background-color:purple;border:1px solid purple;margin-right:1em;-webkit-print-color-adjust:exact;">&nbsp;</span> Lists</li>
                            <li><span style="padding:0 1em;background-color:black;border:1px solid black;margin-right:1em;-webkit-print-color-adjust:exact;">&nbsp;</span> Unassessed articles and lists</li>
                        </ul>
                    </div>
                </div>
                <p><i>[Note: The table above (prepared by the <a href="/wiki/Wikipedia:Version_1.0_Editorial_Team" title="Wikipedia:Version 1.0 Editorial Team">Wikipedia Version 1.0 Editorial Team</a>) is automatically updated daily by <a href="/wiki/User:WP_1.0_bot" title="User:WP 1.0 bot">User:WP 1.0 bot</a>, but the bar-chart and the two pie-charts are not auto-updated. In them, new data has to be entered by a Wikipedia editor (i.e. user).]</i></p>
                <h2><span class="mw-headline" id="Graphics">Graphics</span></h2>
                <ul class="gallery mw-gallery-traditional">
                    <li class="gallerybox" style="width: 335px">
                        <div style="width: 335px">
                            <div class="thumb" style="width: 330px;">
                                <div style="margin:15px auto;"><a href="/wiki/File:Wikipedia_by_Language.svg" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Wikipedia_by_Language.svg/200px-Wikipedia_by_Language.svg.png" width="200" height="200" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Wikipedia_by_Language.svg/300px-Wikipedia_by_Language.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Wikipedia_by_Language.svg/400px-Wikipedia_by_Language.svg.png 2x" data-file-width="480" data-file-height="480"></a></div>
                            </div>
                            <div class="gallerytext">
                                <p>Percentages of articles written in various language families. In March 2013, 16.76% of articles were in English.</p>
                            </div>
                        </div>
                    </li>
                    <li class="gallerybox" style="width: 335px">
                        <div style="width: 335px">
                            <div class="thumb" style="width: 330px;">
                                <div style="margin:39px auto;"><a href="/wiki/File:English_Wikipedia_%E2%80%93_Most_popular_edition_of_Wikipedia_by_country_%E2%80%93_Wikimedia_Traffic_Analysis_Report_%E2%80%93_1_Jul_2009-31_Oct_2013.svg" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/English_Wikipedia_%E2%80%93_Most_popular_edition_of_Wikipedia_by_country_%E2%80%93_Wikimedia_Traffic_Analysis_Report_%E2%80%93_1_Jul_2009-31_Oct_2013.svg/300px-English_Wikipedia_%E2%80%93_Most_popular_edition_of_Wikipedia_by_country_%E2%80%93_Wikimedia_Traffic_Analysis_Report_%E2%80%93_1_Jul_2009-31_Oct_2013.svg.png" width="300" height="152" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/52/English_Wikipedia_%E2%80%93_Most_popular_edition_of_Wikipedia_by_country_%E2%80%93_Wikimedia_Traffic_Analysis_Report_%E2%80%93_1_Jul_2009-31_Oct_2013.svg/450px-English_Wikipedia_%E2%80%93_Most_popular_edition_of_Wikipedia_by_country_%E2%80%93_Wikimedia_Traffic_Analysis_Report_%E2%80%93_1_Jul_2009-31_Oct_2013.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/52/English_Wikipedia_%E2%80%93_Most_popular_edition_of_Wikipedia_by_country_%E2%80%93_Wikimedia_Traffic_Analysis_Report_%E2%80%93_1_Jul_2009-31_Oct_2013.svg/600px-English_Wikipedia_%E2%80%93_Most_popular_edition_of_Wikipedia_by_country_%E2%80%93_Wikimedia_Traffic_Analysis_Report_%E2%80%93_1_Jul_2009-31_Oct_2013.svg.png 2x" data-file-width="2754" data-file-height="1397"></a></div>
                            </div>
                            <div class="gallerytext">
                                <p>The countries in which the English Wikipedia is the most popular language version of Wikipedia are shown in red.<sup id="cite_ref-stats_42-0" class="reference"><a href="#cite_note-stats-42">[42]</a></sup></p>
                            </div>
                        </div>
                    </li>
                    <li class="gallerybox" style="width: 335px">
                        <div style="width: 335px">
                            <div class="thumb" style="width: 330px;">
                                <div style="margin:41.5px auto;"><a href="/wiki/File:Enwiki-map.png" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/Enwiki-map.png/300px-Enwiki-map.png" width="300" height="147" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/Enwiki-map.png/450px-Enwiki-map.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/42/Enwiki-map.png/600px-Enwiki-map.png 2x" data-file-width="2446" data-file-height="1200"></a></div>
                            </div>
                            <div class="gallerytext">
                                <p>Top 25 contributor countries to the English Wikipedia. Dark green: Native English speaking countries; light green: countries with English as a foreign language.<sup id="cite_ref-autogenerated1_43-0" class="reference"><a href="#cite_note-autogenerated1-43">[43]</a></sup></p>
                            </div>
                        </div>
                    </li>
                    <li class="gallerybox" style="width: 335px">
                        <div style="width: 335px">
                            <div class="thumb" style="width: 330px;">
                                <div style="margin:15px auto;">
                                    <div id="mwe_player_0" class="PopUpMediaTransform" style="width:267px;" videopayload="<div class=&quot;mediaContainer&quot; style=&quot;width:400px&quot;><video id=&quot;mwe_player_1&quot; poster=&quot;//upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Wiki_feel_stupid_v2.ogv/400px--Wiki_feel_stupid_v2.ogv.jpg&quot; controls=&quot;&quot; preload=&quot;none&quot; autoplay=&quot;&quot; style=&quot;width:400px;height:300px&quot; class=&quot;kskin&quot; data-durationhint=&quot;296.43333333333&quot; data-startoffset=&quot;0&quot; data-mwtitle=&quot;Wiki_feel_stupid_v2.ogv&quot; data-mwprovider=&quot;wikimediacommons&quot;><source src=&quot;//upload.wikimedia.org/wikipedia/commons/7/7d/Wiki_feel_stupid_v2.ogv&quot; type=&quot;video/ogg; codecs=&amp;quot;theora, vorbis&amp;quot;&quot; data-title=&quot;Original Ogg file, 400 × 300 (171 kbps)&quot; data-shorttitle=&quot;Ogg source&quot; data-width=&quot;400&quot; data-height=&quot;300&quot; data-bandwidth=&quot;170503&quot; data-framerate=&quot;30&quot;/><source src=&quot;//upload.wikimedia.org/wikipedia/commons/transcoded/7/7d/Wiki_feel_stupid_v2.ogv/Wiki_feel_stupid_v2.ogv.160p.webm&quot; type=&quot;video/webm; codecs=&amp;quot;vp8, vorbis&amp;quot;&quot; data-title=&quot;Low bandwidth WebM (160P)&quot; data-shorttitle=&quot;WebM 160P&quot; data-transcodekey=&quot;160p.webm&quot; data-width=&quot;214&quot; data-height=&quot;160&quot; data-bandwidth=&quot;195544&quot; data-framerate=&quot;30&quot;/><source src=&quot;//upload.wikimedia.org/wikipedia/commons/transcoded/7/7d/Wiki_feel_stupid_v2.ogv/Wiki_feel_stupid_v2.ogv.240p.webm&quot; type=&quot;video/webm; codecs=&amp;quot;vp8, vorbis&amp;quot;&quot; data-title=&quot;Small WebM (240P)&quot; data-shorttitle=&quot;WebM 240P&quot; data-transcodekey=&quot;240p.webm&quot; data-width=&quot;320&quot; data-height=&quot;240&quot; data-bandwidth=&quot;309944&quot; data-framerate=&quot;30&quot;/><track src=&quot;https://commons.wikimedia.org/w/index.php?title=TimedText:Wiki_feel_stupid_v2.ogv.en.srt&amp;amp;action=raw&amp;amp;ctype=text%2Fx-srt&quot; kind=&quot;subtitles&quot; type=&quot;text/x-srt&quot; srclang=&quot;en&quot; label=&quot;English (en) subtitles&quot; data-mwtitle=&quot;TimedText:Wiki_feel_stupid_v2.ogv.en.srt&quot; data-mwprovider=&quot;wikimediacommons&quot; data-dir=&quot;ltr&quot;/><track src=&quot;https://commons.wikimedia.org/w/index.php?title=TimedText:Wiki_feel_stupid_v2.ogv.tr.srt&amp;amp;action=raw&amp;amp;ctype=text%2Fx-srt&quot; kind=&quot;subtitles&quot; type=&quot;text/x-srt&quot; srclang=&quot;tr&quot; label=&quot;Türkçe (tr) subtitles&quot; data-mwtitle=&quot;TimedText:Wiki_feel_stupid_v2.ogv.tr.srt&quot; data-mwprovider=&quot;wikimediacommons&quot; data-dir=&quot;ltr&quot;/></video></div>"><img alt="File:Wiki feel stupid v2.ogv" style="width:267px;height:200px" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Wiki_feel_stupid_v2.ogv/267px--Wiki_feel_stupid_v2.ogv.jpg"><a href="//upload.wikimedia.org/wikipedia/commons/7/7d/Wiki_feel_stupid_v2.ogv" title="Play media" target="new"><span class="play-btn-large"><span class="mw-tmh-playtext">Play media</span></span></a></div>
                                </div>
                            </div>
                            <div class="gallerytext">
                                <p>In April 2009, the Wikimedia Foundation conducted a usability study on the English Wikipedia, questioning users about the editing mechanism.<sup id="cite_ref-44" class="reference"><a href="#cite_note-44">[44]</a></sup></p>
                            </div>
                        </div>
                    </li>
                    <li class="gallerybox" style="width: 335px">
                        <div style="width: 335px">
                            <div class="thumb" style="width: 330px;">
                                <div style="margin:30.5px auto;">
                                    <div id="mwe_player_2" class="PopUpMediaTransform" style="width:300px;" videopayload="<div class=&quot;mediaContainer&quot; style=&quot;width:854px&quot;><video id=&quot;mwe_player_3&quot; poster=&quot;//upload.wikimedia.org/wikipedia/commons/thumb/6/66/Wikipedia_5_million_articles_milestone_video_November_2015.ogv/854px--Wikipedia_5_million_articles_milestone_video_November_2015.ogv.jpg&quot; controls=&quot;&quot; preload=&quot;none&quot; autoplay=&quot;&quot; style=&quot;width:854px;height:480px&quot; class=&quot;kskin&quot; data-durationhint=&quot;165.79024943311&quot; data-startoffset=&quot;0&quot; data-mwtitle=&quot;Wikipedia_5_million_articles_milestone_video_November_2015.ogv&quot; data-mwprovider=&quot;wikimediacommons&quot;><source src=&quot;//upload.wikimedia.org/wikipedia/commons/transcoded/6/66/Wikipedia_5_million_articles_milestone_video_November_2015.ogv/Wikipedia_5_million_articles_milestone_video_November_2015.ogv.480p.webm&quot; type=&quot;video/webm; codecs=&amp;quot;vp8, vorbis&amp;quot;&quot; data-title=&quot;SD WebM (480P)&quot; data-shorttitle=&quot;WebM 480P&quot; data-transcodekey=&quot;480p.webm&quot; data-width=&quot;854&quot; data-height=&quot;480&quot; data-bandwidth=&quot;834664&quot; data-framerate=&quot;29.97002997003&quot;/><source src=&quot;//upload.wikimedia.org/wikipedia/commons/transcoded/6/66/Wikipedia_5_million_articles_milestone_video_November_2015.ogv/Wikipedia_5_million_articles_milestone_video_November_2015.ogv.720p.webm&quot; type=&quot;video/webm; codecs=&amp;quot;vp8, vorbis&amp;quot;&quot; data-title=&quot;HD WebM (720P)&quot; data-shorttitle=&quot;WebM 720P&quot; data-transcodekey=&quot;720p.webm&quot; data-width=&quot;1280&quot; data-height=&quot;720&quot; data-bandwidth=&quot;1171192&quot; data-framerate=&quot;29.97002997003&quot;/><source src=&quot;//upload.wikimedia.org/wikipedia/commons/transcoded/6/66/Wikipedia_5_million_articles_milestone_video_November_2015.ogv/Wikipedia_5_million_articles_milestone_video_November_2015.ogv.1080p.webm&quot; type=&quot;video/webm; codecs=&amp;quot;vp8, vorbis&amp;quot;&quot; data-title=&quot;Full HD WebM (1080P)&quot; data-shorttitle=&quot;WebM 1080P&quot; data-transcodekey=&quot;1080p.webm&quot; data-width=&quot;1920&quot; data-height=&quot;1080&quot; data-bandwidth=&quot;2044544&quot; data-framerate=&quot;29.97002997003&quot;/><source src=&quot;//upload.wikimedia.org/wikipedia/commons/6/66/Wikipedia_5_million_articles_milestone_video_November_2015.ogv&quot; type=&quot;video/ogg; codecs=&amp;quot;theora, vorbis&amp;quot;&quot; data-title=&quot;Original Ogg file, 1,920 × 1,080 (6.47 Mbps)&quot; data-shorttitle=&quot;Ogg source&quot; data-width=&quot;1920&quot; data-height=&quot;1080&quot; data-bandwidth=&quot;6473958&quot; data-framerate=&quot;29.97002997003&quot;/><source src=&quot;//upload.wikimedia.org/wikipedia/commons/transcoded/6/66/Wikipedia_5_million_articles_milestone_video_November_2015.ogv/Wikipedia_5_million_articles_milestone_video_November_2015.ogv.160p.webm&quot; type=&quot;video/webm; codecs=&amp;quot;vp8, vorbis&amp;quot;&quot; data-title=&quot;Low bandwidth WebM (160P)&quot; data-shorttitle=&quot;WebM 160P&quot; data-transcodekey=&quot;160p.webm&quot; data-width=&quot;284&quot; data-height=&quot;160&quot; data-bandwidth=&quot;201464&quot; data-framerate=&quot;29.97002997003&quot;/><source src=&quot;//upload.wikimedia.org/wikipedia/commons/transcoded/6/66/Wikipedia_5_million_articles_milestone_video_November_2015.ogv/Wikipedia_5_million_articles_milestone_video_November_2015.ogv.240p.webm&quot; type=&quot;video/webm; codecs=&amp;quot;vp8, vorbis&amp;quot;&quot; data-title=&quot;Small WebM (240P)&quot; data-shorttitle=&quot;WebM 240P&quot; data-transcodekey=&quot;240p.webm&quot; data-width=&quot;426&quot; data-height=&quot;240&quot; data-bandwidth=&quot;264240&quot; data-framerate=&quot;29.97002997003&quot;/><source src=&quot;//upload.wikimedia.org/wikipedia/commons/transcoded/6/66/Wikipedia_5_million_articles_milestone_video_November_2015.ogv/Wikipedia_5_million_articles_milestone_video_November_2015.ogv.360p.webm&quot; type=&quot;video/webm; codecs=&amp;quot;vp8, vorbis&amp;quot;&quot; data-title=&quot;WebM (360P)&quot; data-shorttitle=&quot;WebM 360P&quot; data-transcodekey=&quot;360p.webm&quot; data-width=&quot;640&quot; data-height=&quot;360&quot; data-bandwidth=&quot;446416&quot; data-framerate=&quot;29.97002997003&quot;/></video></div>"><img alt="File:Wikipedia 5 million articles milestone video November 2015.ogv" style="width:300px;height:169px" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/66/Wikipedia_5_million_articles_milestone_video_November_2015.ogv/300px--Wikipedia_5_million_articles_milestone_video_November_2015.ogv.jpg"><a href="//upload.wikimedia.org/wikipedia/commons/6/66/Wikipedia_5_million_articles_milestone_video_November_2015.ogv" title="Play media" target="new"><span class="play-btn-large"><span class="mw-tmh-playtext">Play media</span></span></a></div>
                                </div>
                            </div>
                            <div class="gallerytext">
                                <p>Video marking English Wikipedia's milestone of <a href="/wiki/Wikipedia:Five_million_articles" title="Wikipedia:Five million articles">five million articles</a> on 1 November 2015</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <table class="wikitable collapsible collapsed" style="width:310px;" id="collapsibleTable0">
                    <tbody><tr>
                        <th><span class="collapseButton">[<a id="collapseButton0" href="#">show</a>]</span>Bar chart, origin of edits</th>
                    </tr>
                    <tr style="display: none;">
                        <td>
                            <div class="barbox" style="overflow-x: auto;">
                                <div style="border:1px solid silver; font-size:88%; padding:0.4em; width:300px; background: white;">
                                    <table style="border-collapse:collapse; width:100%;">
                                        <tbody><tr style="background:#ddd">
                                            <th colspan="5">Origin of edits (2014/1 – 2014/3)<sup id="cite_ref-45" class="reference"><a href="#cite_note-45">[45]</a></sup></th>
                                        </tr>
                                        <tr style="font-size:88%; height:4px;">
                                            <td style="padding:0 4px;"></td>
                                            <td style="padding:0 4px; text-align:right;"></td>
                                            <td style="width:100px;"></td>
                                            <td style="padding:0 4px; width:1em; text-align:right;"></td>
                                            <td style="padding:0 4px; text-align:right;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/23px-Flag_of_the_United_States.svg.png" width="23" height="12" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/35px-Flag_of_the_United_States.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/46px-Flag_of_the_United_States.svg.png 2x" data-file-width="1235" data-file-height="650">&nbsp;</span><a href="/wiki/United_States" title="United States">United States</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Black; width:38.3%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">38.3%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/23px-Flag_of_the_United_Kingdom.svg.png" width="23" height="12" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/35px-Flag_of_the_United_Kingdom.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/46px-Flag_of_the_United_Kingdom.svg.png 2x" data-file-width="1200" data-file-height="600">&nbsp;</span><a href="/wiki/United_Kingdom" title="United Kingdom">United Kingdom</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Blue; width:13.2%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">13.2%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/23px-Flag_of_India.svg.png" width="23" height="15" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/35px-Flag_of_India.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/45px-Flag_of_India.svg.png 2x" data-file-width="1350" data-file-height="900">&nbsp;</span><a href="/wiki/India" title="India">India</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Orange; width:6.9%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">6.9%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/c/cf/Flag_of_Canada.svg/23px-Flag_of_Canada.svg.png" width="23" height="12" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/en/thumb/c/cf/Flag_of_Canada.svg/35px-Flag_of_Canada.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/c/cf/Flag_of_Canada.svg/46px-Flag_of_Canada.svg.png 2x" data-file-width="1000" data-file-height="500">&nbsp;</span><a href="/wiki/Canada" title="Canada">Canada</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Red; width:5.4%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">5.4%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/b/b9/Flag_of_Australia.svg/23px-Flag_of_Australia.svg.png" width="23" height="12" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/en/thumb/b/b9/Flag_of_Australia.svg/35px-Flag_of_Australia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/b/b9/Flag_of_Australia.svg/46px-Flag_of_Australia.svg.png 2x" data-file-width="1280" data-file-height="640">&nbsp;</span><a href="/wiki/Australia" title="Australia">Australia</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Purple; width:3.6%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">3.6%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;">Unknown</td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:DeepPink; width:2.9%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">2.9%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/23px-Flag_of_the_Philippines.svg.png" width="23" height="12" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/35px-Flag_of_the_Philippines.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/46px-Flag_of_the_Philippines.svg.png 2x" data-file-width="900" data-file-height="450">&nbsp;</span><a href="/wiki/Philippines" title="Philippines">Philippines</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Green; width:2.6%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">2.6%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/23px-Flag_of_Germany.svg.png" width="23" height="14" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/35px-Flag_of_Germany.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/46px-Flag_of_Germany.svg.png 2x" data-file-width="1000" data-file-height="600">&nbsp;</span><a href="/wiki/Germany" title="Germany">Germany</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Brown; width:1.5%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">1.5%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/22px-Flag_of_Brazil.svg.png" width="22" height="15" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/33px-Flag_of_Brazil.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/43px-Flag_of_Brazil.svg.png 2x" data-file-width="720" data-file-height="504">&nbsp;</span><a href="/wiki/Brazil" title="Brazil">Brazil</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Orange; width:1.1%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">1.1%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/23px-Flag_of_Italy.svg.png" width="23" height="15" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/35px-Flag_of_Italy.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/45px-Flag_of_Italy.svg.png 2x" data-file-width="1500" data-file-height="1000">&nbsp;</span><a href="/wiki/Italy" title="Italy">Italy</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Black; width:1.0%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">1.0%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/45/Flag_of_Ireland.svg/23px-Flag_of_Ireland.svg.png" width="23" height="12" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/45/Flag_of_Ireland.svg/35px-Flag_of_Ireland.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/45/Flag_of_Ireland.svg/46px-Flag_of_Ireland.svg.png 2x" data-file-width="1200" data-file-height="600">&nbsp;</span><a href="/wiki/Republic_of_Ireland" title="Republic of Ireland">Ireland</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Yellow; width:1.0%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">1.0%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/23px-Flag_of_Pakistan.svg.png" width="23" height="15" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/35px-Flag_of_Pakistan.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/45px-Flag_of_Pakistan.svg.png 2x" data-file-width="900" data-file-height="600">&nbsp;</span><a href="/wiki/Pakistan" title="Pakistan">Pakistan</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Black; width:0.9%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">0.9%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/23px-Flag_of_France.svg.png" width="23" height="15" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/35px-Flag_of_France.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/45px-Flag_of_France.svg.png 2x" data-file-width="900" data-file-height="600">&nbsp;</span><a href="/wiki/France" title="France">France</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Black; width:0.8%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">0.8%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/66/Flag_of_Malaysia.svg/23px-Flag_of_Malaysia.svg.png" width="23" height="12" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/66/Flag_of_Malaysia.svg/35px-Flag_of_Malaysia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/66/Flag_of_Malaysia.svg/46px-Flag_of_Malaysia.svg.png 2x" data-file-width="2800" data-file-height="1400">&nbsp;</span><a href="/wiki/Malaysia" title="Malaysia">Malaysia</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Black; width:0.8%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">0.8%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/23px-Flag_of_the_Netherlands.svg.png" width="23" height="15" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/35px-Flag_of_the_Netherlands.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/45px-Flag_of_the_Netherlands.svg.png 2x" data-file-width="900" data-file-height="600">&nbsp;</span><a href="/wiki/Netherlands" title="Netherlands">Netherlands</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Purple; width:0.8%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">0.8%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/23px-Flag_of_Indonesia.svg.png" width="23" height="15" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/35px-Flag_of_Indonesia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/45px-Flag_of_Indonesia.svg.png 2x" data-file-width="450" data-file-height="300">&nbsp;</span><a href="/wiki/Indonesia" title="Indonesia">Indonesia</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Black; width:0.8%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">0.8%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/23px-Flag_of_the_People%27s_Republic_of_China.svg.png" width="23" height="15" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/35px-Flag_of_the_People%27s_Republic_of_China.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/45px-Flag_of_the_People%27s_Republic_of_China.svg.png 2x" data-file-width="900" data-file-height="600">&nbsp;</span><a href="/wiki/China" title="China">China</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Black; width:0.7%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">0.7%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Flag_of_New_Zealand.svg/23px-Flag_of_New_Zealand.svg.png" width="23" height="12" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Flag_of_New_Zealand.svg/35px-Flag_of_New_Zealand.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Flag_of_New_Zealand.svg/46px-Flag_of_New_Zealand.svg.png 2x" data-file-width="1200" data-file-height="600">&nbsp;</span><a href="/wiki/New_Zealand" title="New Zealand">New Zealand</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Black; width:0.7%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">0.7%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/23px-Flag_of_Spain.svg.png" width="23" height="15" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/35px-Flag_of_Spain.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/9/9a/Flag_of_Spain.svg/45px-Flag_of_Spain.svg.png 2x" data-file-width="750" data-file-height="500">&nbsp;</span><a href="/wiki/Spain" title="Spain">Spain</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Black; width:0.7%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">0.7%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/23px-Flag_of_Iran.svg.png" width="23" height="13" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/35px-Flag_of_Iran.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Flag_of_Iran.svg/46px-Flag_of_Iran.svg.png 2x" data-file-width="630" data-file-height="360">&nbsp;</span><a href="/wiki/Iran" title="Iran">Iran</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Black; width:0.7%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">0.7%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Mexico.svg/23px-Flag_of_Mexico.svg.png" width="23" height="13" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Mexico.svg/35px-Flag_of_Mexico.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Mexico.svg/46px-Flag_of_Mexico.svg.png 2x" data-file-width="840" data-file-height="480">&nbsp;</span><a href="/wiki/Mexico" title="Mexico">Mexico</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Black; width:0.5%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">0.5%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/4/4c/Flag_of_Sweden.svg/23px-Flag_of_Sweden.svg.png" width="23" height="14" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/en/thumb/4/4c/Flag_of_Sweden.svg/35px-Flag_of_Sweden.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/4/4c/Flag_of_Sweden.svg/46px-Flag_of_Sweden.svg.png 2x" data-file-width="1600" data-file-height="1000">&nbsp;</span><a href="/wiki/Sweden" title="Sweden">Sweden</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Black; width:0.5%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">0.5%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/23px-Flag_of_Russia.svg.png" width="23" height="15" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/35px-Flag_of_Russia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/45px-Flag_of_Russia.svg.png 2x" data-file-width="900" data-file-height="600">&nbsp;</span><a href="/wiki/Russia" title="Russia">Russia</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Black; width:0.5%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">0.5%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Greece.svg/23px-Flag_of_Greece.svg.png" width="23" height="15" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Greece.svg/35px-Flag_of_Greece.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Greece.svg/45px-Flag_of_Greece.svg.png 2x" data-file-width="600" data-file-height="400">&nbsp;</span><a href="/wiki/Greece" title="Greece">Greece</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Black; width:0.5%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">0.5%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/23px-Flag_of_Turkey.svg.png" width="23" height="15" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/35px-Flag_of_Turkey.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/45px-Flag_of_Turkey.svg.png 2x" data-file-width="1200" data-file-height="800">&nbsp;</span><a href="/wiki/Turkey" title="Turkey">Turkey</a></td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:Black; width:0.5%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">0.5%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; min-width: 8em;">Other</td>
                                            <td style="width: 100px; border-left: solid 1px silver; border-right: solid 1px silver;">
                                                <div style="background:grey; width:13.1%; overflow: hidden;"> </div>
                                            </td>
                                            <td colspan="2" style="padding-left: 0.4em; padding-right: 0.4em; text-align: right;">13.1%</td>
                                        </tr>
                                        </tbody></table>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody></table>
                <h2><span class="mw-headline" id="Internal_news_publications">Internal news publications</span></h2>
                <div role="note" class="hatnote navigation-not-searchable">See also: <a href="/wiki/The_Signpost_(Wikipedia)" class="mw-redirect" title="The Signpost (Wikipedia)">The Signpost (Wikipedia)</a></div>
                <div class="floatright"><a href="/wiki/File:WikipediaSignpostIcon.svg" class="image"><img alt="WikipediaSignpostIcon.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4c/WikipediaSignpostIcon.svg/46px-WikipediaSignpostIcon.svg.png" width="46" height="55" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4c/WikipediaSignpostIcon.svg/69px-WikipediaSignpostIcon.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4c/WikipediaSignpostIcon.svg/92px-WikipediaSignpostIcon.svg.png 2x" data-file-width="46" data-file-height="55"></a></div>
                <p>Community-produced news publications include <a href="/wiki/Wikipedia:Signpost" class="mw-redirect" title="Wikipedia:Signpost"><i>The Signpost</i></a>.<sup id="cite_ref-AyersMatthews2008_8-1" class="reference"><a href="#cite_note-AyersMatthews2008-8">[8]</a></sup> <i>The Signpost</i> (previously known as <i>The Wikipedia Signpost</i><sup id="cite_ref-Cohen2007_46-0" class="reference"><a href="#cite_note-Cohen2007-46">[46]</a></sup>) is the English Wikipedia's newspaper.<sup id="cite_ref-AyersMatthews2008_8-2" class="reference"><a href="#cite_note-AyersMatthews2008-8">[8]</a></sup><sup id="cite_ref-Koebler2016_47-0" class="reference"><a href="#cite_note-Koebler2016-47">[47]</a></sup><sup id="cite_ref-Geoffroy2014_48-0" class="reference"><a href="#cite_note-Geoffroy2014-48">[48]</a></sup> It is managed by the <a href="/wiki/Wikipedia_community" title="Wikipedia community">Wikipedia community</a> and is published online weekly.<sup id="cite_ref-AyersMatthews2008_8-3" class="reference"><a href="#cite_note-AyersMatthews2008-8">[8]</a></sup><sup id="cite_ref-Dobusch2014_49-0" class="reference"><a href="#cite_note-Dobusch2014-49">[49]</a></sup> Each edition contains stories and articles related to the Wikipedia community.<sup id="cite_ref-Rosen2013_50-0" class="reference"><a href="#cite_note-Rosen2013-50">[50]</a></sup><sup id="cite_ref-Jemielniak2014_51-0" class="reference"><a href="#cite_note-Jemielniak2014-51">[51]</a></sup> A wide range of editors contribute articles and other pieces.<sup id="cite_ref-AyersMatthews2008_8-4" class="reference"><a href="#cite_note-AyersMatthews2008-8">[8]</a></sup></p>
                <p>The publication was founded in January 2005 by <a href="/wiki/Wikipedia_administrator" class="mw-redirect" title="Wikipedia administrator">Wikipedia administrator</a> and later Chair of the <a href="/wiki/Wikimedia_Foundation" title="Wikimedia Foundation">Wikimedia Foundation</a> Board of Trustees, Michael Snow.<sup id="cite_ref-AyersMatthews2008_8-5" class="reference"><a href="#cite_note-AyersMatthews2008-8">[8]</a></sup><sup id="cite_ref-Cohen2007_46-1" class="reference"><a href="#cite_note-Cohen2007-46">[46]</a></sup><sup id="cite_ref-McCarthy2008_52-0" class="reference"><a href="#cite_note-McCarthy2008-52">[52]</a></sup> Originally titled <i>The Wikipedia Signpost</i>, it was later shortened to simply <i>The Signpost</i>.<sup id="cite_ref-Cohen2007_46-2" class="reference"><a href="#cite_note-Cohen2007-46">[46]</a></sup><sup id="cite_ref-okoli_53-0" class="reference"><a href="#cite_note-okoli-53">[53]</a></sup> The newspaper reports on Wikipedia events including <a href="/wiki/Arbitration_Committee" class="mw-redirect" title="Arbitration Committee">Arbitration Committee</a> rulings,<sup id="cite_ref-ayeletoz_54-0" class="reference"><a href="#cite_note-ayeletoz-54">[54]</a></sup> Wikimedia Foundation issues,<sup id="cite_ref-ParoutisHeracleous2013_55-0" class="reference"><a href="#cite_note-ParoutisHeracleous2013-55">[55]</a></sup> and <a href="/wiki/Outline_of_Wikipedia#Wikipedia-related_projects" title="Outline of Wikipedia">other Wikipedia-related projects</a>.<sup id="cite_ref-Waters2010_56-0" class="reference"><a href="#cite_note-Waters2010-56">[56]</a></sup> Snow continued to contribute as a writer to <i>The Signpost</i> until his appointment to the <a href="https://meta.wikimedia.org/wiki/Board_of_Trustees" class="extiw" title="m:Board of Trustees">Board of Trustees</a> of the Wikimedia Foundation in February 2008.<sup id="cite_ref-congratulatesnow_57-0" class="reference"><a href="#cite_note-congratulatesnow-57">[57]</a></sup></p>
                <p><a href="/wiki/Investigative_journalism" title="Investigative journalism">Investigative journalism</a> by <i>The Signpost</i> in 2015 on changes to <a href="/wiki/Freedom_of_panorama" title="Freedom of panorama">freedom of panorama</a> copyright restrictions in Europe was covered by publications in multiple languages including German,<sup id="cite_ref-germanpanorama_58-0" class="reference"><a href="#cite_note-germanpanorama-58">[58]</a></sup> Italian,<sup id="cite_ref-italianpanorama_59-0" class="reference"><a href="#cite_note-italianpanorama-59">[59]</a></sup> Polish,<sup id="cite_ref-wyborczapanorama_60-0" class="reference"><a href="#cite_note-wyborczapanorama-60">[60]</a></sup> and Russian.<sup id="cite_ref-prophotosrupanorama_61-0" class="reference"><a href="#cite_note-prophotosrupanorama-61">[61]</a></sup> Wikipedia users Gamaliel and Go Phightins! became editors-in-chief of <i>The Signpost</i> in January 2015; prior editor-in-chief The ed17 noted that during his tenure the publication expanded its scope by including more reporting on the wider Wikimedia movement and English Wikipedia itself.<sup id="cite_ref-introducingyournew_62-0" class="reference"><a href="#cite_note-introducingyournew-62">[62]</a></sup> In a letter to readers upon the newspaper's tenth anniversary, the new co-editors-in-chief stressed the importance of maintaining independence from the Wikimedia Foundation in their reporting.<sup id="cite_ref-includesyou_63-0" class="reference"><a href="#cite_note-includesyou-63">[63]</a></sup></p>
                <p><i>The Signpost</i> has been the subject of academic analysis in publications including <i><a href="/wiki/Sociological_Forum" title="Sociological Forum">Sociological Forum</a></i>,<sup id="cite_ref-sociologicalforum_64-0" class="reference"><a href="#cite_note-sociologicalforum-64">[64]</a></sup> the social movements journal <i>Interface</i>,<sup id="cite_ref-interface_65-0" class="reference"><a href="#cite_note-interface-65">[65]</a></sup> and <i>New Review of Academic Librarianship</i>;<sup id="cite_ref-Bayliss2013_66-0" class="reference"><a href="#cite_note-Bayliss2013-66">[66]</a></sup> and was consulted for data on Wikipedia by researchers from <a href="/wiki/Los_Alamos_National_Laboratory" title="Los Alamos National Laboratory">Los Alamos National Laboratory</a> and <a href="/wiki/Dartmouth_College" title="Dartmouth College">Dartmouth College</a>.<sup id="cite_ref-yan2011_67-0" class="reference"><a href="#cite_note-yan2011-67">[67]</a></sup> It has garnered generally positive reception from media publications including <i><a href="/wiki/The_New_York_Times" title="The New York Times">The New York Times</a></i>,<sup id="cite_ref-allthenews_68-0" class="reference"><a href="#cite_note-allthenews-68">[68]</a></sup> <i><a href="/wiki/The_Register" title="The Register">The Register</a></i>,<sup id="cite_ref-Orlowski2016_69-0" class="reference"><a href="#cite_note-Orlowski2016-69">[69]</a></sup> <i>Nonprofit Quarterly</i>,<sup id="cite_ref-McCambridge2016_70-0" class="reference"><a href="#cite_note-McCambridge2016-70">[70]</a></sup> and <i><a href="/wiki/Heise_Online" class="mw-redirect" title="Heise Online">Heise Online</a></i>.<sup id="cite_ref-Kleinz2016_71-0" class="reference"><a href="#cite_note-Kleinz2016-71">[71]</a></sup> The book <i><a href="/wiki/Wikipedia:The_Missing_Manual" class="mw-redirect" title="Wikipedia:The Missing Manual">Wikipedia: The Missing Manual</a></i> called <i>The Signpost</i> essential reading for ambitious new Wikipedia editors.<sup id="cite_ref-Broughton2008_72-0" class="reference"><a href="#cite_note-Broughton2008-72">[72]</a></sup></p>
                <p>Other past and present community news publications include the "<a href="/wiki/WikiWorld" class="mw-redirect" title="WikiWorld">WikiWorld</a>" web comic, the <a href="/wiki/Wikipedia:Wikipedia_Weekly" class="mw-redirect" title="Wikipedia:Wikipedia Weekly"><i>Wikipedia Weekly</i></a> podcast, and newsletters of specific WikiProjects like <a href="/wiki/Wikipedia:BUGLE" class="mw-redirect" title="Wikipedia:BUGLE"><i>The Bugle</i></a> from <a href="/wiki/Wikipedia:Milhist" class="mw-redirect" title="Wikipedia:Milhist">WikiProject Military History</a> and the monthly newsletter from <a href="/wiki/Wikipedia:GOCE" class="mw-redirect" title="Wikipedia:GOCE">The Guild of Copy Editors</a>. There are also a number of publications from the Wikimedia Foundation and multilingual publications such as the <a href="https://blog.wikimedia.org/" class="extiw" title="wmfblog:">Wikimedia Blog</a> and <i><a href="https://outreach.wikimedia.org/wiki/This_Month_in_Education" class="extiw" title="outreach:This Month in Education">This Month in Education</a></i>.</p>
                <h2><span class="mw-headline" id="See_also">See also</span></h2>
                <ul>
                    <li><a href="/wiki/English_Wikipedia_blackout" class="mw-redirect" title="English Wikipedia blackout">English Wikipedia blackout</a></li>
                    <li><a href="/wiki/History_of_Wikipedia" title="History of Wikipedia">History of Wikipedia</a></li>
                    <li><a href="/wiki/Reliability_of_Wikipedia" title="Reliability of Wikipedia">Reliability of Wikipedia</a></li>
                    <li><a href="/wiki/Simple_English_Wikipedia" title="Simple English Wikipedia">Simple English Wikipedia</a></li>
                    <li><a href="/wiki/Wikipedia_for_Schools" class="mw-redirect" title="Wikipedia for Schools">Wikipedia for Schools</a></li>
                    <li><a href="/wiki/Wikipedia_community" title="Wikipedia community">Wikipedia community</a></li>
                    <li><a href="/wiki/Wikipedia:Milestones" title="Wikipedia:Milestones">Wikipedia:Milestones</a></li>
                    <li><a href="/wiki/Wikipedia:Milestone_statistics" title="Wikipedia:Milestone statistics">Wikipedia:Milestone statistics</a></li>
                </ul>
                <h2><span class="mw-headline" id="Footnotes">Footnotes</span></h2>
                <div class="reflist columns references-column-width" style="-moz-column-width: 30em; -webkit-column-width: 30em; column-width: 30em; list-style-type: decimal;">
                    <ol class="references">
                        <li id="cite_note-foundercontroversy-1"><span class="mw-cite-backlink"><b><a href="#cite_ref-foundercontroversy_1-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text">There is some controversy over who founded Wikipedia. Wales considers himself to be the sole founder of Wikipedia and has told the <i><a href="/wiki/Boston_Globe" class="mw-redirect" title="Boston Globe">Boston Globe</a></i> that "it's preposterous" to call Sanger the co-founder.<sup class="noprint Inline-Template Template-Fact" style="white-space:nowrap;">[<i><a href="/wiki/Wikipedia:Citation_needed" title="Wikipedia:Citation needed"><span title="This claim needs references to reliable sources. (February 2015)">citation needed</span></a></i>]</sup> However, Sanger strongly contests that description. He was identified as a co-founder of Wikipedia as early as September 2001 and referred to himself as being founder as early as January 2002.<sup class="noprint Inline-Template Template-Fact" style="white-space:nowrap;">[<i><a href="/wiki/Wikipedia:Citation_needed" title="Wikipedia:Citation needed"><span title="This claim needs references to reliable sources. (February 2015)">citation needed</span></a></i>]</sup></span>
                            <ul>
                                <li><cite class="citation news">Sidener, Jonathan (6 December 2004). <a rel="nofollow" class="external text" href="https://web.archive.org/web/20160114101809/http://www.sandiegouniontribune.com/uniontrib/20041206/news_mz1b6encyclo.html">"Everyone's Encyclopedia"</a>. San Diego Union Tribune. Archived from <a rel="nofollow" class="external text" href="http://www.signonsandiego.com/uniontrib/20041206/news_mz1b6encyclo.html">the original</a> on 14 January 2016<span class="reference-accessdate">. Retrieved <span class="nowrap">15 October</span> 2006</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.atitle=Everyone%27s+Encyclopedia&amp;rft.date=2004-12-06&amp;rft.aulast=Sidener&amp;rft.aufirst=Jonathan&amp;rft_id=http%3A%2F%2Fwww.signonsandiego.com%2Funiontrib%2F20041206%2Fnews_mz1b6encyclo.html&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></li>
                                <li><cite class="citation news">Meyers, Peter (20 September 2001). <a rel="nofollow" class="external text" href="https://query.nytimes.com/gst/fullpage.html?res=9800E5D6123BF933A1575AC0A9679C8B63&amp;n=Top%2fReference%2fTimes%20Topics%2fSubjects%2fC%2fComputer%20Software">"Fact-Driven? Collegial? This Site Wants You"</a>. <i>New York Times</i><span class="reference-accessdate">. Retrieved <span class="nowrap">15 October</span> 2006</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=New+York+Times&amp;rft.atitle=Fact-Driven%3F+Collegial%3F+This+Site+Wants+You&amp;rft.date=2001-09-20&amp;rft.aulast=Meyers&amp;rft.aufirst=Peter&amp;rft_id=https%3A%2F%2Fquery.nytimes.com%2Fgst%2Ffullpage.html%3Fres%3D9800E5D6123BF933A1575AC0A9679C8B63%26n%3DTop%252fReference%252fTimes%2520Topics%252fSubjects%252fC%252fComputer%2520Software&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></li>
                                <li><cite class="citation web"><a href="/wiki/Larry_Sanger" title="Larry Sanger">Sanger, Larry</a>. <a class="external text" href="http://meta.wikimedia.org/w/index.php?title=Wikipedia_and_why_it_matters&amp;oldid=149626">"What Wikipedia is and why it matters"</a><span class="reference-accessdate">. Retrieved <span class="nowrap">12 April</span> 2006</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=What+Wikipedia+is+and+why+it+matters&amp;rft.au=Sanger%2C+Larry&amp;rft_id=http%3A%2F%2Fmeta.wikimedia.org%2Fw%2Findex.php%3Ftitle%3DWikipedia_and_why_it_matters%26oldid%3D149626&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></li>
                            </ul>
                        </li>
                        <li id="cite_note-2"><span class="mw-cite-backlink"><b><a href="#cite_ref-2"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text">about 50 percent more than the next in rank, the <a href="/wiki/Swedish_Wikipedia" title="Swedish Wikipedia">Swedish Wikipedia</a>. See <a href="https://meta.wikimedia.org/wiki/List_of_Wikipedias" class="extiw" title="m:List of Wikipedias">m:List of Wikipedias</a>.</span></li>
                        <li id="cite_note-3"><span class="mw-cite-backlink"><b><a href="#cite_ref-3"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">Wikimedia Meta-Wiki (21 September 2008). <a class="external text" href="http://meta.wikimedia.org/w/index.php?title=List_of_Wikipedias&amp;oldid=520778">"List of Wikipedias"</a><span class="reference-accessdate">. Retrieved <span class="nowrap">21 September</span> 2008</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=List+of+Wikipedias&amp;rft.date=2008-09-21&amp;rft.au=Wikimedia+Meta-Wiki&amp;rft_id=http%3A%2F%2Fmeta.wikimedia.org%2Fw%2Findex.php%3Ftitle%3DList_of_Wikipedias%26oldid%3D520778&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-4"><span class="mw-cite-backlink"><b><a href="#cite_ref-4"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text">The number of articles on the English Wikipedia is shown by the <a href="/wiki/MediaWiki" title="MediaWiki">MediaWiki</a> variable <code>{{NUMBEROFARTICLES}}</code>, with all Wikipedias as total <code>{{NUMBEROF|ARTICLES|total}}</code> = 47,451,808.</span></li>
                        <li id="cite_note-5"><span class="mw-cite-backlink"><b><a href="#cite_ref-5"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text">See size of downloads at <a href="/wiki/Wikipedia:Database_download" title="Wikipedia:Database download">Wikipedia:Database download</a> and a list of historical sizes <a class="external text" href="https://commons.wikimedia.org/wiki/File:Wikipedia_article_size_in_gigabytes.png#Summary">here</a></span></li>
                        <li id="cite_note-6"><span class="mw-cite-backlink"><b><a href="#cite_ref-6"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web"><a class="external text" href="https://en.wikipedia.org/wiki/Wikipedia:Five_million_articles">"Wikipedia:Five million articles"</a>. <i>Wikipedia</i>. Wikimedia Foundation<span class="reference-accessdate">. Retrieved <span class="nowrap">1 November</span> 2015</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=unknown&amp;rft.jtitle=Wikipedia&amp;rft.atitle=Wikipedia%3AFive+million+articles&amp;rft_id=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FWikipedia%3AFive_million_articles&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-7"><span class="mw-cite-backlink"><b><a href="#cite_ref-7"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web"><a class="external text" href="https://commons.wikimedia.org/wiki/File:Wikipedia-logo-v2-en_5m_articles.png">"File:Wikipedia-logo-v2-en 5m articles.png"</a>. <i>Wikimedia Commons</i>. Wikimedia Foundation<span class="reference-accessdate">. Retrieved <span class="nowrap">1 November</span> 2015</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=unknown&amp;rft.jtitle=Wikimedia+Commons&amp;rft.atitle=File%3AWikipedia-logo-v2-en+5m+articles.png&amp;rft_id=https%3A%2F%2Fcommons.wikimedia.org%2Fwiki%2FFile%3AWikipedia-logo-v2-en_5m_articles.png&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-AyersMatthews2008-8"><span class="mw-cite-backlink">^ <a href="#cite_ref-AyersMatthews2008_8-0"><span class="cite-accessibility-label">Jump up to: </span><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-AyersMatthews2008_8-1"><sup><i><b>b</b></i></sup></a> <a href="#cite_ref-AyersMatthews2008_8-2"><sup><i><b>c</b></i></sup></a> <a href="#cite_ref-AyersMatthews2008_8-3"><sup><i><b>d</b></i></sup></a> <a href="#cite_ref-AyersMatthews2008_8-4"><sup><i><b>e</b></i></sup></a> <a href="#cite_ref-AyersMatthews2008_8-5"><sup><i><b>f</b></i></sup></a></span> <span class="reference-text"><cite class="citation book">Phoebe Ayers; Charles Matthews; Ben Yates (2008). <a rel="nofollow" class="external text" href="https://books.google.com/books?id=lHdi1CEPLb4C&amp;pg=PA345"><i>How Wikipedia Works: And how You Can be a Part of it</i></a>. No Starch Press. pp.&nbsp;345–. <a href="/wiki/International_Standard_Book_Number" title="International Standard Book Number">ISBN</a>&nbsp;<a href="/wiki/Special:BookSources/978-1-59327-176-3" title="Special:BookSources/978-1-59327-176-3">978-1-59327-176-3</a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=How+Wikipedia+Works%3A+And+how+You+Can+be+a+Part+of+it&amp;rft.pages=345-&amp;rft.pub=No+Starch+Press&amp;rft.date=2008&amp;rft.isbn=978-1-59327-176-3&amp;rft.au=Phoebe+Ayers&amp;rft.au=Charles+Matthews&amp;rft.au=Ben+Yates&amp;rft_id=https%3A%2F%2Fbooks.google.com%2Fbooks%3Fid%3DlHdi1CEPLb4C%26pg%3DPA345&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-9"><span class="mw-cite-backlink"><b><a href="#cite_ref-9"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">English Wikipedia (30 January 2007). <a class="external text" href="http://en.wikipedia.org/w/index.php?title=Wikipedia:Featured_articles&amp;oldid=104207677">"Featured articles"</a><span class="reference-accessdate">. Retrieved <span class="nowrap">30 January</span> 2007</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Featured+articles&amp;rft.date=2007-01-30&amp;rft.au=English+Wikipedia&amp;rft_id=http%3A%2F%2Fen.wikipedia.org%2Fw%2Findex.php%3Ftitle%3DWikipedia%3AFeatured_articles%26oldid%3D104207677&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-10"><span class="mw-cite-backlink"><b><a href="#cite_ref-10"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">English Wikipedia (25 January 2007). <a class="external text" href="http://en.wikipedia.org/w/index.php?title=Wikipedia:Neutral_point_of_view&amp;oldid=103033132">"Neutral point of view"</a><span class="reference-accessdate">. Retrieved <span class="nowrap">30 January</span> 2007</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Neutral+point+of+view&amp;rft.date=2007-01-25&amp;rft.au=English+Wikipedia&amp;rft_id=http%3A%2F%2Fen.wikipedia.org%2Fw%2Findex.php%3Ftitle%3DWikipedia%3ANeutral_point_of_view%26oldid%3D103033132&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-11"><span class="mw-cite-backlink"><b><a href="#cite_ref-11"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">Wikimedia Meta-Wiki (29 January 2007). <a class="external text" href="http://meta.wikimedia.org/w/index.php?title=Help:Template&amp;oldid=520481">"Help:Template"</a><span class="reference-accessdate">. Retrieved <span class="nowrap">30 January</span> 2007</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Help%3ATemplate&amp;rft.date=2007-01-29&amp;rft.au=Wikimedia+Meta-Wiki&amp;rft_id=http%3A%2F%2Fmeta.wikimedia.org%2Fw%2Findex.php%3Ftitle%3DHelp%3ATemplate%26oldid%3D520481&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-12"><span class="mw-cite-backlink"><b><a href="#cite_ref-12"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">English Wikipedia (19 January 2007). <a class="external text" href="http://en.wikipedia.org/w/index.php?title=Wikipedia:WikiProject_Stub_sorting&amp;oldid=101829026">"WikiProject Stub sorting"</a><span class="reference-accessdate">. Retrieved <span class="nowrap">30 January</span> 2007</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=WikiProject+Stub+sorting&amp;rft.date=2007-01-19&amp;rft.au=English+Wikipedia&amp;rft_id=http%3A%2F%2Fen.wikipedia.org%2Fw%2Findex.php%3Ftitle%3DWikipedia%3AWikiProject_Stub_sorting%26oldid%3D101829026&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-13"><span class="mw-cite-backlink"><b><a href="#cite_ref-13"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">English Wikipedia (27 January 2007). <a class="external text" href="http://en.wikipedia.org/w/index.php?title=Wikipedia:Resolving_disputes&amp;oldid=103577785">"Resolving disputes"</a><span class="reference-accessdate">. Retrieved <span class="nowrap">30 January</span> 2007</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Resolving+disputes&amp;rft.date=2007-01-27&amp;rft.au=English+Wikipedia&amp;rft_id=http%3A%2F%2Fen.wikipedia.org%2Fw%2Findex.php%3Ftitle%3DWikipedia%3AResolving_disputes%26oldid%3D103577785&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-14"><span class="mw-cite-backlink"><b><a href="#cite_ref-14"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">English Wikipedia (30 January 2007). <a class="external text" href="http://en.wikipedia.org/w/index.php?title=Wikipedia:Article_Creation_and_Improvement_Drive&amp;oldid=104243512">"Article Creation and Improvement Drive"</a><span class="reference-accessdate">. Retrieved <span class="nowrap">30 January</span> 2007</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Article+Creation+and+Improvement+Drive&amp;rft.date=2007-01-30&amp;rft.au=English+Wikipedia&amp;rft_id=http%3A%2F%2Fen.wikipedia.org%2Fw%2Findex.php%3Ftitle%3DWikipedia%3AArticle_Creation_and_Improvement_Drive%26oldid%3D104243512&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-4,564,000-15"><span class="mw-cite-backlink"><b><a href="#cite_ref-4,564,000_15-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><a href="/wiki/Wikipedia:Wikipedia_Signpost/2007-04-02/News_and_notes" title="Wikipedia:Wikipedia Signpost/2007-04-02/News and notes">Wikipedia:Wikipedia Signpost/2007-04-02/News and notes</a>. Retrieved 20 April 2007</span></li>
                        <li id="cite_note-1,000,000-16"><span class="mw-cite-backlink"><b><a href="#cite_ref-1,000,000_16-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><a href="/wiki/Wikipedia:Wikipedia_Signpost/2006-02-27/News_and_notes" title="Wikipedia:Wikipedia Signpost/2006-02-27/News and notes">Wikipedia:Wikipedia Signpost/2006-02-27/News and notes</a>. Retrieved 20 April 2007</span></li>
                        <li id="cite_note-17"><span class="mw-cite-backlink"><b><a href="#cite_ref-17"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web"><a class="external text" href="http://stats.wikimedia.org/EN/TablesWikipediaEN.htm#wikipedians">"Wikipedia Statistics – Tables – English"</a>. Stats.wikimedia.org<span class="reference-accessdate">. Retrieved <span class="nowrap">8 August</span> 2013</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Wikipedia+Statistics+%E2%80%93+Tables+%E2%80%93+English&amp;rft.pub=Stats.wikimedia.org&amp;rft_id=http%3A%2F%2Fstats.wikimedia.org%2FEN%2FTablesWikipediaEN.htm%23wikipedians&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-18"><span class="mw-cite-backlink"><b><a href="#cite_ref-18"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web"><a class="external text" href="http://stats.wikimedia.org/EN/TablesWikipediaEN.htm#activitylevels">"Wikipedia Statistics – Tables – English"</a>. Stats.wikimedia.org<span class="reference-accessdate">. Retrieved <span class="nowrap">8 August</span> 2013</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Wikipedia+Statistics+%E2%80%93+Tables+%E2%80%93+English&amp;rft.pub=Stats.wikimedia.org&amp;rft_id=http%3A%2F%2Fstats.wikimedia.org%2FEN%2FTablesWikipediaEN.htm%23activitylevels&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-AU-19"><span class="mw-cite-backlink"><b><a href="#cite_ref-AU_19-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web"><a href="/wiki/Stacy_Schiff" title="Stacy Schiff">Schiff, Stacy</a> (2 December 2006). <a rel="nofollow" class="external text" href="http://www.theage.com.au/news/in-depth/democracy-for-knowalls/2006/11/30/1164777721624.html?page=fullpage#contentSwap2">"Know-alls"</a>. <i><a href="/wiki/The_Age" title="The Age">The Age</a></i>. Australia: Fairfax Digital Network<span class="reference-accessdate">. Retrieved <span class="nowrap">15 June</span> 2009</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=unknown&amp;rft.jtitle=The+Age&amp;rft.atitle=Know-alls&amp;rft.date=2006-12-02&amp;rft.aulast=Schiff&amp;rft.aufirst=Stacy&amp;rft_id=http%3A%2F%2Fwww.theage.com.au%2Fnews%2Fin-depth%2Fdemocracy-for-knowalls%2F2006%2F11%2F30%2F1164777721624.html%3Fpage%3Dfullpage%23contentSwap2&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-Wales1-20"><span class="mw-cite-backlink">^ <a href="#cite_ref-Wales1_20-0"><span class="cite-accessibility-label">Jump up to: </span><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-Wales1_20-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text"><cite class="citation web">Wales, Jimmy (4 December 2003). <a rel="nofollow" class="external text" href="http://markmail.org/message/komcldyapats43xj#query:+page:1+mid:komcldyapats43xj+state:results">"WikiEN-l Wikiquette committee appointments"</a>. <i>Wikipedia</i>. <a href="/wiki/Wikimedia_Foundation" title="Wikimedia Foundation">Wikimedia Foundation</a><span class="reference-accessdate">. Retrieved <span class="nowrap">9 June</span> 2009</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=unknown&amp;rft.jtitle=Wikipedia&amp;rft.atitle=WikiEN-l+Wikiquette+committee+appointments&amp;rft.date=2003-12-04&amp;rft.aulast=Wales&amp;rft.aufirst=Jimmy&amp;rft_id=http%3A%2F%2Fmarkmail.org%2Fmessage%2Fkomcldyapats43xj%23query%3A%2Bpage%3A1%2Bmid%3Akomcldyapats43xj%2Bstate%3Aresults&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-SSRN-21"><span class="mw-cite-backlink"><b><a href="#cite_ref-SSRN_21-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation journal">Hoffman, David A.; Salil Mehra (2010). "Wikitruth Through Wikiorder". <i><a href="/wiki/Emory_Law_Journal" class="mw-redirect" title="Emory Law Journal">Emory Law Journal</a></i>. <b>59</b> (2010). <a href="/wiki/Social_Science_Research_Network" title="Social Science Research Network">SSRN</a>&nbsp;<span class="plainlinks"><a rel="nofollow" class="external text" href="//ssrn.com/abstract=1354424">1354424</a> <img alt="Freely accessible" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Lock-green.svg/9px-Lock-green.svg.png" title="Freely accessible" width="9" height="14" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Lock-green.svg/14px-Lock-green.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/65/Lock-green.svg/18px-Lock-green.svg.png 2x" data-file-width="512" data-file-height="813"></span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Emory+Law+Journal&amp;rft.atitle=Wikitruth+Through+Wikiorder&amp;rft.volume=59&amp;rft.issue=2010&amp;rft.date=2010&amp;rft_id=%2F%2Fssrn.com%2Fabstract%3D1354424&amp;rft.aulast=Hoffman&amp;rft.aufirst=David+A.&amp;rft.au=Salil+Mehra&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-Fortune-22"><span class="mw-cite-backlink"><b><a href="#cite_ref-Fortune_22-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">Hyatt, Josh (1 June 2006). <a rel="nofollow" class="external text" href="http://money.cnn.com/2006/05/31/magazines/fortune/mysql_greatteams_fortune/index.htm">"Secrets of Greatness: Great Teams"</a>. <i>Fortune</i>. <a href="/wiki/Time_Warner" title="Time Warner">Time Warner</a><span class="reference-accessdate">. Retrieved <span class="nowrap">15 June</span> 2009</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=unknown&amp;rft.jtitle=Fortune&amp;rft.atitle=Secrets+of+Greatness%3A+Great+Teams&amp;rft.date=2006-06-01&amp;rft.aulast=Hyatt&amp;rft.aufirst=Josh&amp;rft_id=http%3A%2F%2Fmoney.cnn.com%2F2006%2F05%2F31%2Fmagazines%2Ffortune%2Fmysql_greatteams_fortune%2Findex.htm&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-Wales2-23"><span class="mw-cite-backlink"><b><a href="#cite_ref-Wales2_23-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">Wales, Jimmy (20 December 2008). <a class="external text" href="http://en.wikipedia.org/w/index.php?title=User_talk:Jimbo_Wales&amp;oldid=259248025">"ArbCom Appointments"</a>. <i>Wikipedia</i><span class="reference-accessdate">. Retrieved <span class="nowrap">14 June</span> 2009</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=unknown&amp;rft.jtitle=Wikipedia&amp;rft.atitle=ArbCom+Appointments&amp;rft.date=2008-12-20&amp;rft.aulast=Wales&amp;rft.aufirst=Jimmy&amp;rft_id=http%3A%2F%2Fen.wikipedia.org%2Fw%2Findex.php%3Ftitle%3DUser_talk%3AJimbo_Wales%26oldid%3D259248025&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-24"><span class="mw-cite-backlink"><b><a href="#cite_ref-24"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">Wikidata (1 April 2015). <a class="external text" href="https://www.wikidata.org/w/index.php?title=Q3999572&amp;oldid=163359767#sitelinks-wikipedia">"Wikipedia sitelinks for Arbitration Committee"</a><span class="reference-accessdate">. Retrieved <span class="nowrap">1 April</span> 2015</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Wikipedia+sitelinks+for+Arbitration+Committee&amp;rft.date=2015-04-01&amp;rft.au=Wikidata&amp;rft_id=https%3A%2F%2Fwww.wikidata.org%2Fw%2Findex.php%3Ftitle%3DQ3999572%26oldid%3D163359767%23sitelinks-wikipedia&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-dewiki-2007-25"><span class="mw-cite-backlink"><b><a href="#cite_ref-dewiki-2007_25-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">Kleinz, Torsten (30 April 2007). <a rel="nofollow" class="external text" href="http://www.heise.de/newsticker/Wikipedia-sucht-Schiedsrichter--/meldung/89083">"Wikipedia sucht Schiedsrichter"</a> (in German). heise online<span class="reference-accessdate">. Retrieved <span class="nowrap">9 June</span> 2009</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Wikipedia+sucht+Schiedsrichter&amp;rft.pub=heise+online&amp;rft.date=2007-04-30&amp;rft.aulast=Kleinz&amp;rft.aufirst=Torsten&amp;rft_id=http%3A%2F%2Fwww.heise.de%2Fnewsticker%2FWikipedia-sucht-Schiedsrichter--%2Fmeldung%2F89083&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-LATimes-26"><span class="mw-cite-backlink">^ <a href="#cite_ref-LATimes_26-0"><span class="cite-accessibility-label">Jump up to: </span><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-LATimes_26-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text"><cite class="citation news">Hennessy-Fiske, Molly (29 April 2008). <a rel="nofollow" class="external text" href="http://articles.latimes.com/2008/apr/29/local/me-wikipedia29">"Wikipedia threats went unchecked – Los Angeles Times"</a>. <i>Los Angeles Times</i>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Los+Angeles+Times&amp;rft.atitle=Wikipedia+threats+went+unchecked+%E2%80%93+Los+Angeles+Times&amp;rft.date=2008-04-29&amp;rft.aulast=Hennessy-Fiske&amp;rft.aufirst=Molly&amp;rft_id=http%3A%2F%2Farticles.latimes.com%2F2008%2Fapr%2F29%2Flocal%2Fme-wikipedia29&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-ABCLocal-27"><span class="mw-cite-backlink">^ <a href="#cite_ref-ABCLocal_27-0"><span class="cite-accessibility-label">Jump up to: </span><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-ABCLocal_27-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text"><cite class="citation web"><a rel="nofollow" class="external text" href="http://abclocal.go.com/kabc/story?section=news/local&amp;id=6087243">"Hacienda Heights school receives possible threat"</a>. <i>abc7.com</i>. Abclocal.go.com. 18 April 2008<span class="reference-accessdate">. Retrieved <span class="nowrap">8 August</span> 2013</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=unknown&amp;rft.jtitle=abc7.com&amp;rft.atitle=Hacienda+Heights+school+receives+possible+threat&amp;rft.date=2008-04-18&amp;rft_id=http%3A%2F%2Fabclocal.go.com%2Fkabc%2Fstory%3Fsection%3Dnews%2Flocal%26id%3D6087243&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-LATimes2-28"><span class="mw-cite-backlink">^ <a href="#cite_ref-LATimes2_28-0"><span class="cite-accessibility-label">Jump up to: </span><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-LATimes2_28-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text"><cite class="citation news"><a rel="nofollow" class="external text" href="http://latimesblogs.latimes.com/lanow/2008/04/wiki.html?cid=6a00d8341c630a53ef011571abd811970b">"Student arrested for violent threats on Wikipedia"</a>. <i>Los Angeles Times</i>. 29 April 2008<span class="reference-accessdate">. Retrieved <span class="nowrap">19 January</span> 2012</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Los+Angeles+Times&amp;rft.atitle=Student+arrested+for+violent+threats+on+Wikipedia&amp;rft.date=2008-04-29&amp;rft_id=http%3A%2F%2Flatimesblogs.latimes.com%2Flanow%2F2008%2F04%2Fwiki.html%3Fcid%3D6a00d8341c630a53ef011571abd811970b&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-29"><span class="mw-cite-backlink"><b><a href="#cite_ref-29"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation news"><a rel="nofollow" class="external text" href="http://www.pantagraph.com/news/article_baef01f3-e56f-52e1-b9af-e90eb83e811b.html">"Teen charged after threat to school on Wikipedia"</a>. Bloomington, IL: Pantagraph.com. Associated Press. 31 October 2006<span class="reference-accessdate">. Retrieved <span class="nowrap">26 January</span> 2011</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.atitle=Teen+charged+after+threat+to+school+on+Wikipedia&amp;rft.date=2006-10-31&amp;rft_id=http%3A%2F%2Fwww.pantagraph.com%2Fnews%2Farticle_baef01f3-e56f-52e1-b9af-e90eb83e811b.html&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-Gross-30"><span class="mw-cite-backlink"><b><a href="#cite_ref-Gross_30-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text">Gross, Doug. "<a rel="nofollow" class="external text" href="http://www.cnn.com/2013/07/24/tech/web/controversial-wikipedia-pages/index.html?hpt=hp_t5">Wiki wars: The 10 most controversial Wikipedia pages</a>." <i><a href="/wiki/CNN" title="CNN">CNN</a></i>. 24 July 2013. Retrieved on 26 July 2013. <cite class="citation web"><a rel="nofollow" class="external text" href="https://web.archive.org/web/20160412001130/http://edition.cnn.com/2013/07/24/tech/web/controversial-wikipedia-pages/index.html?hpt=hp_t5">"Archived copy"</a>. Archived from the original on 12 April 2016<span class="reference-accessdate">. Retrieved <span class="nowrap">26 July</span> 2013</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Archived+copy&amp;rft_id=http%3A%2F%2Fedition.cnn.com%2F2013%2F07%2F24%2Ftech%2Fweb%2Fcontroversial-wikipedia-pages%2Findex.html%3Fhpt%3Dhp_t5&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span><span class="citation-comment" style="display:none; color:#33aa33; margin-left:0.3em">CS1 maint: BOT: original-url status unknown (<a href="/wiki/Category:CS1_maint:_BOT:_original-url_status_unknown" title="Category:CS1 maint: BOT: original-url status unknown">link</a>)</span></span></li>
                        <li id="cite_note-31"><span class="mw-cite-backlink"><b><a href="#cite_ref-31"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">English Wikipedia. <a class="external text" href="http://en.wikipedia.org/wiki/Wikipedia:Manual_of_Style_%28spelling%29">"Wikipedia:Manual of Style (spelling)"</a><span class="reference-accessdate">. Retrieved <span class="nowrap">25 February</span> 2006</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Wikipedia%3AManual+of+Style+%28spelling%29&amp;rft.au=English+Wikipedia&amp;rft_id=http%3A%2F%2Fen.wikipedia.org%2Fwiki%2FWikipedia%3AManual_of_Style_%2528spelling%2529&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-32"><span class="mw-cite-backlink"><b><a href="#cite_ref-32"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">English Wikipedia. <a class="external text" href="http://en.wikipedia.org/wiki/Wikipedia:Manual_of_Style#National_varieties_of_English">"Wikipedia:Manual of Style"</a><span class="reference-accessdate">. Retrieved <span class="nowrap">10 October</span> 2007</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Wikipedia%3AManual+of+Style&amp;rft.au=English+Wikipedia&amp;rft_id=http%3A%2F%2Fen.wikipedia.org%2Fwiki%2FWikipedia%3AManual_of_Style%23National_varieties_of_English&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-33"><span class="mw-cite-backlink"><b><a href="#cite_ref-33"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><a href="/wiki/Andrew_Lih" title="Andrew Lih">Lih</a>, p. 135.</span></li>
                        <li id="cite_note-34"><span class="mw-cite-backlink"><b><a href="#cite_ref-34"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><a href="/wiki/Andrew_Lih" title="Andrew Lih">Lih</a>, p. 136.</span></li>
                        <li id="cite_note-35"><span class="mw-cite-backlink"><b><a href="#cite_ref-35"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web"><a class="external text" href="https://en.wikipedia.org/wiki/Wikipedia:WikiProject">"Wikipedia: Wikiprojects"</a><span class="reference-accessdate">. Retrieved <span class="nowrap">16 March</span> 2015</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Wikipedia%3A+Wikiprojects&amp;rft_id=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FWikipedia%3AWikiProject&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-WP_1.0_editorial_team_1-36"><span class="mw-cite-backlink"><b><a href="#cite_ref-WP_1.0_editorial_team_1_36-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web"><a class="external text" href="https://en.wikipedia.org/wiki/Wikipedia:Version_1.0_Editorial_Team/Assessment">"Wikipedia:Version 1.0 Editorial Team/Assessment"</a><span class="reference-accessdate">. Retrieved <span class="nowrap">28 October</span> 2007</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Wikipedia%3AVersion+1.0+Editorial+Team%2FAssessment&amp;rft_id=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FWikipedia%3AVersion_1.0_Editorial_Team%2FAssessment&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-FMonday_feat_article_patterns_1-37"><span class="mw-cite-backlink"><b><a href="#cite_ref-FMonday_feat_article_patterns_1_37-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web"><a rel="nofollow" class="external text" href="http://firstmonday.org/htbin/cgiwrap/bin/ojs/index.php/fm/article/view/2365/2182">"Comparing featured article groups and revision patterns correlations in Wikipedia"</a>. <a href="/wiki/First_Monday_(journal)" title="First Monday (journal)">First Monday</a><span class="reference-accessdate">. Retrieved <span class="nowrap">13 July</span> 2010</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Comparing+featured+article+groups+and+revision+patterns+correlations+in+Wikipedia&amp;rft.pub=First+Monday&amp;rft_id=http%3A%2F%2Ffirstmonday.org%2Fhtbin%2Fcgiwrap%2Fbin%2Fojs%2Findex.php%2Ffm%2Farticle%2Fview%2F2365%2F2182&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-IBM_feat_articles_hidden_pattern_1-38"><span class="mw-cite-backlink"><b><a href="#cite_ref-IBM_feat_articles_hidden_pattern_1_38-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation journal">Fernanda B. Viégas; Martin Wattenberg; Matthew M. McKeon (22 July 2007). <a rel="nofollow" class="external text" href="http://www.research.ibm.com/visual/papers/hidden_order_wikipedia.pdf">"The Hidden Order of Wikipedia"</a> <span style="font-size:85%;">(PDF)</span>. Visual Communication Lab, IBM Research<span class="reference-accessdate">. Retrieved <span class="nowrap">30 October</span> 2007</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.atitle=The+Hidden+Order+of+Wikipedia&amp;rft.date=2007-07-22&amp;rft.au=Fernanda+B.+Vi%C3%A9gas&amp;rft.au=Martin+Wattenberg&amp;rft.au=Matthew+M.+McKeon&amp;rft_id=http%3A%2F%2Fwww.research.ibm.com%2Fvisual%2Fpapers%2Fhidden_order_wikipedia.pdf&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-Poderi_Giacomo_feat_articles_1-39"><span class="mw-cite-backlink"><b><a href="#cite_ref-Poderi_Giacomo_feat_articles_1_39-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text">Poderi, Giacomo, <i>Wikipedia and the Featured Articles: How a Technological System Can Produce Best Quality Articles</i>, Master thesis, <a href="/wiki/University_of_Maastricht" class="mw-redirect" title="University of Maastricht">University of Maastricht</a>, October 2008.</span></li>
                        <li id="cite_note-FMonday_WP_quality_control_1-40"><span class="mw-cite-backlink"><b><a href="#cite_ref-FMonday_WP_quality_control_1_40-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation journal">Lindsey, David (5 April 2010). <a rel="nofollow" class="external text" href="http://firstmonday.org/htbin/cgiwrap/bin/ojs/index.php/fm/article/viewArticle/2721/2482">"Evaluating quality control of Wikipedia's featured articles"</a>. <i>First Monday</i>. <b>15</b> (4)<span class="reference-accessdate">. Retrieved <span class="nowrap">29 January</span> 2017</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=First+Monday&amp;rft.atitle=Evaluating+quality+control+of+Wikipedia%27s+featured+articles&amp;rft.volume=15&amp;rft.issue=4&amp;rft.date=2010-04-05&amp;rft.aulast=Lindsey&amp;rft.aufirst=David&amp;rft_id=http%3A%2F%2Ffirstmonday.org%2Fhtbin%2Fcgiwrap%2Fbin%2Fojs%2Findex.php%2Ffm%2Farticle%2FviewArticle%2F2721%2F2482&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-en.wikipedia-41"><span class="mw-cite-backlink">^ <a href="#cite_ref-en.wikipedia_41-0"><span class="cite-accessibility-label">Jump up to: </span><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-en.wikipedia_41-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text"><a href="/wiki/Wikipedia:Version_1.0_Editorial_Team/Statistics" title="Wikipedia:Version 1.0 Editorial Team/Statistics">Wikipedia:Version 1.0 Editorial Team/Statistics – Wikipedia, the free encyclopedia</a></span></li>
                        <li id="cite_note-stats-42"><span class="mw-cite-backlink"><b><a href="#cite_ref-stats_42-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">Zachte, Erik (14 November 2011). <a class="external text" href="http://stats.wikimedia.org/wikimedia/squids/SquidReportPageViewsPerCountryTrends.htm">"Wikimedia Traffic Analysis Report – Wikipedia Page Views Per Country – Trends"</a>. Wikimedia Statistics<span class="reference-accessdate">. Retrieved <span class="nowrap">19 January</span> 2011</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Wikimedia+Traffic+Analysis+Report+%E2%80%93+Wikipedia+Page+Views+Per+Country+%E2%80%93+Trends&amp;rft.pub=Wikimedia+Statistics&amp;rft.date=2011-11-14&amp;rft.aulast=Zachte&amp;rft.aufirst=Erik&amp;rft_id=http%3A%2F%2Fstats.wikimedia.org%2Fwikimedia%2Fsquids%2FSquidReportPageViewsPerCountryTrends.htm&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-autogenerated1-43"><span class="mw-cite-backlink"><b><a href="#cite_ref-autogenerated1_43-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">Zachte, Erik (14 November 2011). <a class="external text" href="http://stats.wikimedia.org/wikimedia/squids/SquidReportPageEditsPerLanguageBreakdown.htm">"Wikimedia Traffic Analysis Report – Page Edits Per Wikipedia Language – Breakdown"</a>. Wikimedia Statistics<span class="reference-accessdate">. Retrieved <span class="nowrap">19 January</span> 2011</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Wikimedia+Traffic+Analysis+Report+%E2%80%93+Page+Edits+Per+Wikipedia+Language+%E2%80%93+Breakdown&amp;rft.pub=Wikimedia+Statistics&amp;rft.date=2011-11-14&amp;rft.aulast=Zachte&amp;rft.aufirst=Erik&amp;rft_id=http%3A%2F%2Fstats.wikimedia.org%2Fwikimedia%2Fsquids%2FSquidReportPageEditsPerLanguageBreakdown.htm&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-44"><span class="mw-cite-backlink"><b><a href="#cite_ref-44"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web"><a class="external text" href="http://usability.wikimedia.org/wiki/Usability_and_Experience_Study">"Usability and Experience Study"</a>. <a href="/wiki/Wikimedia_Foundation" title="Wikimedia Foundation">Wikimedia Foundation</a><span class="reference-accessdate">. Retrieved <span class="nowrap">19 January</span> 2012</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Usability+and+Experience+Study&amp;rft.pub=Wikimedia+Foundation&amp;rft_id=http%3A%2F%2Fusability.wikimedia.org%2Fwiki%2FUsability_and_Experience_Study&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-45"><span class="mw-cite-backlink"><b><a href="#cite_ref-45"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web"><a class="external text" href="http://stats.wikimedia.org/wikimedia/squids/SquidReportPageEditsPerLanguageBreakdown.htm">"Wikimedia Traffic Analysis Report – Page Edits Per Wikipedia Language – Breakdown"</a>. Stats.wikimedia.org<span class="reference-accessdate">. Retrieved <span class="nowrap">28 July</span> 2014</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Wikimedia+Traffic+Analysis+Report+%E2%80%93+Page+Edits+Per+Wikipedia+Language+%E2%80%93+Breakdown&amp;rft.pub=Stats.wikimedia.org&amp;rft_id=http%3A%2F%2Fstats.wikimedia.org%2Fwikimedia%2Fsquids%2FSquidReportPageEditsPerLanguageBreakdown.htm&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-Cohen2007-46"><span class="mw-cite-backlink">^ <a href="#cite_ref-Cohen2007_46-0"><span class="cite-accessibility-label">Jump up to: </span><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-Cohen2007_46-1"><sup><i><b>b</b></i></sup></a> <a href="#cite_ref-Cohen2007_46-2"><sup><i><b>c</b></i></sup></a></span> <span class="reference-text"><cite class="citation news">Cohen, Noam (5 March 2007). <a rel="nofollow" class="external text" href="https://www.nytimes.com/2007/03/05/technology/05wikipedia.html">"A Contributor to Wikipedia Has His Fictional Side"</a>. <i><a href="/wiki/The_New_York_Times" title="The New York Times">The New York Times</a></i>. p.&nbsp;C5<span class="reference-accessdate">. Retrieved <span class="nowrap">29 February</span> 2016</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=The+New+York+Times&amp;rft.atitle=A+Contributor+to+Wikipedia+Has+His+Fictional+Side&amp;rft.pages=C5&amp;rft.date=2007-03-05&amp;rft.aulast=Cohen&amp;rft.aufirst=Noam&amp;rft_id=https%3A%2F%2Fwww.nytimes.com%2F2007%2F03%2F05%2Ftechnology%2F05wikipedia.html&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-Koebler2016-47"><span class="mw-cite-backlink"><b><a href="#cite_ref-Koebler2016_47-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation news">Koebler, Jason (16 February 2016). <a rel="nofollow" class="external text" href="https://motherboard.vice.com/read/wikipedias-secret-google-competitor-search-engine-is-tearing-it-apart">"The Secret Search Engine Tearing Wikipedia Apart"</a>. <i><a href="/wiki/Vice_(magazine)#Website" title="Vice (magazine)">Vice</a></i>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Vice&amp;rft.atitle=The+Secret+Search+Engine+Tearing+Wikipedia+Apart&amp;rft.date=2016-02-16&amp;rft.aulast=Koebler&amp;rft.aufirst=Jason&amp;rft_id=https%3A%2F%2Fmotherboard.vice.com%2Fread%2Fwikipedias-secret-google-competitor-search-engine-is-tearing-it-apart&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-Geoffroy2014-48"><span class="mw-cite-backlink"><b><a href="#cite_ref-Geoffroy2014_48-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation news">Geoffroy, Romain (16 January 2014). <a rel="nofollow" class="external text" href="http://www.lesinrocks.com/2014/01/16/actualite/employee-wikipedia-debarquee-monnaye-articles-11460948/">"Une employée de Wikipédia débarquée pour avoir monnayé ses articles"</a>. <i><a href="/wiki/Les_Inrockuptibles" title="Les Inrockuptibles">Les Inrockuptibles</a></i>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Les+Inrockuptibles&amp;rft.atitle=Une+employ%C3%A9e+de+Wikip%C3%A9dia+d%C3%A9barqu%C3%A9e+pour+avoir+monnay%C3%A9+ses+articles&amp;rft.date=2014-01-16&amp;rft.aulast=Geoffroy&amp;rft.aufirst=Romain&amp;rft_id=http%3A%2F%2Fwww.lesinrocks.com%2F2014%2F01%2F16%2Factualite%2Femployee-wikipedia-debarquee-monnaye-articles-11460948%2F&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-Dobusch2014-49"><span class="mw-cite-backlink"><b><a href="#cite_ref-Dobusch2014_49-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation news">Dobusch, Leonhard (12 January 2014). <a rel="nofollow" class="external text" href="https://netzpolitik.org/2014/interview-mit-dirk-franke-ueber-grenzen-der-bezahlung-in-der-wikipedia//">"Interview mit Dirk Franke über "Grenzen der Bezahlung" in der Wikipedia"</a>. <i><a href="/wiki/Netzpolitik.org" title="Netzpolitik.org">Netzpolitik.org</a></i>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Netzpolitik.org&amp;rft.atitle=Interview+mit+Dirk+Franke+%C3%BCber+%22Grenzen+der+Bezahlung%22+in+der+Wikipedia&amp;rft.date=2014-01-12&amp;rft.aulast=Dobusch&amp;rft.aufirst=Leonhard&amp;rft_id=https%3A%2F%2Fnetzpolitik.org%2F2014%2Finterview-mit-dirk-franke-ueber-grenzen-der-bezahlung-in-der-wikipedia%2F%2F&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-Rosen2013-50"><span class="mw-cite-backlink"><b><a href="#cite_ref-Rosen2013_50-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">Rosen, Rebecca (6 February 2013). <a rel="nofollow" class="external text" href="https://www.theatlantic.com/technology/archive/2013/02/if-you-want-your-wikipedia-page-to-get-a-ton-of-traffic-die-while-performing-at-the-super-bowl-half-time-show/272919">"If You Want Your Wikipedia Page to Get a TON of Traffic, Die While Performing at the Super Bowl Half-Time Show"</a>. <i><a href="/wiki/The_Atlantic" title="The Atlantic">The Atlantic</a></i><span class="reference-accessdate">. Retrieved <span class="nowrap">21 February</span> 2016</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=unknown&amp;rft.jtitle=The+Atlantic&amp;rft.atitle=If+You+Want+Your+Wikipedia+Page+to+Get+a+TON+of+Traffic%2C+Die+While+Performing+at+the+Super+Bowl+Half-Time+Show&amp;rft.date=2013-02-06&amp;rft.aulast=Rosen&amp;rft.aufirst=Rebecca&amp;rft_id=https%3A%2F%2Fwww.theatlantic.com%2Ftechnology%2Farchive%2F2013%2F02%2Fif-you-want-your-wikipedia-page-to-get-a-ton-of-traffic-die-while-performing-at-the-super-bowl-half-time-show%2F272919&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-Jemielniak2014-51"><span class="mw-cite-backlink"><b><a href="#cite_ref-Jemielniak2014_51-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation book">Dariusz Jemielniak (2014). <a rel="nofollow" class="external text" href="https://books.google.com/books?id=-Iw5AwAAQBAJ&amp;pg=PA231"><i>Common Knowledge?: An Ethnography of Wikipedia</i></a>. Stanford University Press. pp.&nbsp;231–. <a href="/wiki/International_Standard_Book_Number" title="International Standard Book Number">ISBN</a>&nbsp;<a href="/wiki/Special:BookSources/978-0804797238" title="Special:BookSources/978-0804797238">978-0804797238</a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Common+Knowledge%3F%3A+An+Ethnography+of+Wikipedia&amp;rft.pages=231-&amp;rft.pub=Stanford+University+Press&amp;rft.date=2014&amp;rft.isbn=978-0804797238&amp;rft.au=Dariusz+Jemielniak&amp;rft_id=https%3A%2F%2Fbooks.google.com%2Fbooks%3Fid%3D-Iw5AwAAQBAJ%26pg%3DPA231&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-McCarthy2008-52"><span class="mw-cite-backlink"><b><a href="#cite_ref-McCarthy2008_52-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation news">McCarthy, Caroline (18 July 2008). <a rel="nofollow" class="external text" href="http://www.cnet.com/news/wikimedia-foundation-edits-its-board-of-trustees/#!">"Wikimedia Foundation edits its board of trustees"</a>. <a href="/wiki/CNET" title="CNET">CNET</a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.atitle=Wikimedia+Foundation+edits+its+board+of+trustees&amp;rft.date=2008-07-18&amp;rft.aulast=McCarthy&amp;rft.aufirst=Caroline&amp;rft_id=http%3A%2F%2Fwww.cnet.com%2Fnews%2Fwikimedia-foundation-edits-its-board-of-trustees%2F%23%21&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-okoli-53"><span class="mw-cite-backlink"><b><a href="#cite_ref-okoli_53-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation journal">Okoli, Chitu; Mehdi, Mohamad; Mesgari, Mostafa; Nielsen, Finn Årup; Lanamäki, Arto (24 October 2012). "The people's encyclopedia under the gaze of the sages: A systematic review of scholarly research on Wikipedia". <a href="/wiki/Digital_object_identifier" title="Digital object identifier">doi</a>:<a rel="nofollow" class="external text" href="//doi.org/10.2139%2Fssrn.2021326">10.2139/ssrn.2021326</a>. <a href="/wiki/Social_Science_Research_Network" title="Social Science Research Network">SSRN</a>&nbsp;<span class="plainlinks"><a rel="nofollow" class="external text" href="//ssrn.com/abstract=2021326">2021326</a> <img alt="Freely accessible" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Lock-green.svg/9px-Lock-green.svg.png" title="Freely accessible" width="9" height="14" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Lock-green.svg/14px-Lock-green.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/65/Lock-green.svg/18px-Lock-green.svg.png 2x" data-file-width="512" data-file-height="813"></span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.atitle=The+people%27s+encyclopedia+under+the+gaze+of+the+sages%3A+A+systematic+review+of+scholarly+research+on+Wikipedia&amp;rft.date=2012-10-24&amp;rft_id=%2F%2Fssrn.com%2Fabstract%3D2021326&amp;rft_id=info%3Adoi%2F10.2139%2Fssrn.2021326&amp;rft.aulast=Okoli&amp;rft.aufirst=Chitu&amp;rft.au=Mehdi%2C+Mohamad&amp;rft.au=Mesgari%2C+Mostafa&amp;rft.au=Nielsen%2C+Finn+%C3%85rup&amp;rft.au=Lanam%C3%A4ki%2C+Arto&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-ayeletoz-54"><span class="mw-cite-backlink"><b><a href="#cite_ref-ayeletoz_54-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation journal">Oz, Ayelet (1 September 2014). "The Legal Consciousness of Wikipedia". <a href="/wiki/Harvard_Law_School" title="Harvard Law School">Harvard Law School</a>. <a href="/wiki/Digital_object_identifier" title="Digital object identifier">doi</a>:<a rel="nofollow" class="external text" href="//doi.org/10.2139%2Fssrn.2572381">10.2139/ssrn.2572381</a>. <a href="/wiki/Social_Science_Research_Network" title="Social Science Research Network">SSRN</a>&nbsp;<span class="plainlinks"><a rel="nofollow" class="external text" href="//ssrn.com/abstract=2572381">2572381</a> <img alt="Freely accessible" src="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Lock-green.svg/9px-Lock-green.svg.png" title="Freely accessible" width="9" height="14" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Lock-green.svg/14px-Lock-green.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/65/Lock-green.svg/18px-Lock-green.svg.png 2x" data-file-width="512" data-file-height="813"></span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.atitle=The+Legal+Consciousness+of+Wikipedia&amp;rft.date=2014-09-01&amp;rft_id=%2F%2Fssrn.com%2Fabstract%3D2572381&amp;rft_id=info%3Adoi%2F10.2139%2Fssrn.2572381&amp;rft.aulast=Oz&amp;rft.aufirst=Ayelet&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-ParoutisHeracleous2013-55"><span class="mw-cite-backlink"><b><a href="#cite_ref-ParoutisHeracleous2013_55-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation book">Sotirios Paroutis; Loizos Heracleous; Duncan Angwin (1 February 2013). <a rel="nofollow" class="external text" href="https://books.google.com/books?id=DZsQAgAAQBAJ&amp;pg=PT237"><i>Practicing Strategy: Text and Cases</i></a>. SAGE Publications. pp.&nbsp;237–. <a href="/wiki/International_Standard_Book_Number" title="International Standard Book Number">ISBN</a>&nbsp;<a href="/wiki/Special:BookSources/978-1-4462-9047-7" title="Special:BookSources/978-1-4462-9047-7">978-1-4462-9047-7</a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Practicing+Strategy%3A+Text+and+Cases&amp;rft.pages=237-&amp;rft.pub=SAGE+Publications&amp;rft.date=2013-02-01&amp;rft.isbn=978-1-4462-9047-7&amp;rft.au=Sotirios+Paroutis&amp;rft.au=Loizos+Heracleous&amp;rft.au=Duncan+Angwin&amp;rft_id=https%3A%2F%2Fbooks.google.com%2Fbooks%3Fid%3DDZsQAgAAQBAJ%26pg%3DPT237&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-Waters2010-56"><span class="mw-cite-backlink"><b><a href="#cite_ref-Waters2010_56-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation book">Waters, John K. (2010). <i>The Everything Guide to Social Media</i>. Adams Media. pp.&nbsp;180, 270. <a href="/wiki/International_Standard_Book_Number" title="International Standard Book Number">ISBN</a>&nbsp;<a href="/wiki/Special:BookSources/978-1440506314" title="Special:BookSources/978-1440506314">978-1440506314</a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=The+Everything+Guide+to+Social+Media&amp;rft.pages=180%2C+270&amp;rft.pub=Adams+Media&amp;rft.date=2010&amp;rft.isbn=978-1440506314&amp;rft.aulast=Waters&amp;rft.aufirst=John+K.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-congratulatesnow-57"><span class="mw-cite-backlink"><b><a href="#cite_ref-congratulatesnow_57-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation news">Ral315 (18 February 2008). <a class="external text" href="https://en.wikipedia.org/w/index.php?title=Wikipedia:Wikipedia_Signpost/2008-02-18/From_the_editor&amp;oldid=192509690">"From the editor: This week, I'd like to congratulate and thank Michael Snow"</a>. <i>The Wikipedia Signpost</i><span class="reference-accessdate">. Retrieved <span class="nowrap">1 March</span> 2016</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=The+Wikipedia+Signpost&amp;rft.atitle=From+the+editor%3A+This+week%2C+I%27d+like+to+congratulate+and+thank+Michael+Snow&amp;rft.date=2008-02-18&amp;rft.au=Ral315&amp;rft_id=https%3A%2F%2Fen.wikipedia.org%2Fw%2Findex.php%3Ftitle%3DWikipedia%3AWikipedia_Signpost%2F2008-02-18%2FFrom_the_editor%26oldid%3D192509690&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-germanpanorama-58"><span class="mw-cite-backlink"><b><a href="#cite_ref-germanpanorama_58-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation news">Diener, Andrea (27 June 2015). <a rel="nofollow" class="external text" href="https://web.archive.org/web/20150629034301/http://www.faz.net/aktuell/feuilleton/debatten/panoramafreiheit-in-gefahr-das-betrifft-jeden-13668160.html">"Geben Sie Panoramafreiheit, Sire!"</a>. <i>FAZ – Frankfurter Allgemeine Zeitung</i> (in German). Archived from <a rel="nofollow" class="external text" href="http://www.faz.net/aktuell/feuilleton/debatten/panoramafreiheit-in-gefahr-das-betrifft-jeden-13668160.html">the original</a> on 29 June 2015<span class="reference-accessdate">. Retrieved <span class="nowrap">5 March</span> 2016</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=FAZ+%E2%80%93+Frankfurter+Allgemeine+Zeitung&amp;rft.atitle=Geben+Sie+Panoramafreiheit%2C+Sire%21&amp;rft.date=2015-06-27&amp;rft.aulast=Diener&amp;rft.aufirst=Andrea&amp;rft_id=http%3A%2F%2Fwww.faz.net%2Faktuell%2Ffeuilleton%2Fdebatten%2Fpanoramafreiheit-in-gefahr-das-betrifft-jeden-13668160.html&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-italianpanorama-59"><span class="mw-cite-backlink"><b><a href="#cite_ref-italianpanorama_59-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation news"><a rel="nofollow" class="external text" href="https://web.archive.org/web/20150623122005/http://www.clickblog.it/post/185665/liberta-di-panorama-a-rischio-in-europa-con-una-riforma-del-copyright">"Libertà di Panorama: a rischio in Europa con una riforma del copyright"</a>. <i>Blogo: Informazione libera e indipendente</i> (in Italian). 22 June 2015. Archived from <a rel="nofollow" class="external text" href="http://www.clickblog.it/post/185665/liberta-di-panorama-a-rischio-in-europa-con-una-riforma-del-copyright">the original</a> on 23 June 2015<span class="reference-accessdate">. Retrieved <span class="nowrap">5 March</span> 2016</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Blogo%3A+Informazione+libera+e+indipendente&amp;rft.atitle=Libert%C3%A0+di+Panorama%3A+a+rischio+in+Europa+con+una+riforma+del+copyright&amp;rft.date=2015-06-22&amp;rft_id=http%3A%2F%2Fwww.clickblog.it%2Fpost%2F185665%2Fliberta-di-panorama-a-rischio-in-europa-con-una-riforma-del-copyright&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-wyborczapanorama-60"><span class="mw-cite-backlink"><b><a href="#cite_ref-wyborczapanorama_60-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation news"><a rel="nofollow" class="external text" href="https://web.archive.org/web/20150627094832/http://wyborcza.pl/1,75475,18241931,Chcesz_robic_zdjecia_znanych_budowli_Europy__Spiesz.html">"Chcesz robić zdjęcia znanych budowli Europy? Spiesz się. To mogą być ostatnie tygodnie"</a>. <i><a href="/wiki/Gazeta_Wyborcza" title="Gazeta Wyborcza">Gazeta Wyborcza</a></i> (in Polish). 24 June 2015. <a href="/wiki/International_Standard_Serial_Number" title="International Standard Serial Number">ISSN</a>&nbsp;<a rel="nofollow" class="external text" href="//www.worldcat.org/issn/0860-908X">0860-908X</a>. Archived from <a rel="nofollow" class="external text" href="http://wyborcza.pl/1,75475,18241931,Chcesz_robic_zdjecia_znanych_budowli_Europy__Spiesz.html">the original</a> on 27 June 2015<span class="reference-accessdate">. Retrieved <span class="nowrap">5 March</span> 2016</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Gazeta+Wyborcza&amp;rft.atitle=Chcesz+robi%C4%87+zdj%C4%99cia+znanych+budowli+Europy%3F+Spiesz+si%C4%99.+To+mog%C4%85+by%C4%87+ostatnie+tygodnie&amp;rft.date=2015-06-24&amp;rft.issn=0860-908X&amp;rft_id=http%3A%2F%2Fwyborcza.pl%2F1%2C75475%2C18241931%2CChcesz_robic_zdjecia_znanych_budowli_Europy__Spiesz.html&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-prophotosrupanorama-61"><span class="mw-cite-backlink"><b><a href="#cite_ref-prophotosrupanorama_61-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation news"><a rel="nofollow" class="external text" href="https://web.archive.org/web/20150627065322/http://prophotos.ru/news/17098-trevoga-svobodnaya-s-emka-na-ulitsah-evropy-pod-ugrozoy">"ТРЕВОГА! Свободная съемка на улицах Европы – под угрозой"</a> (in Russian). 23 June 2015. Archived from <a rel="nofollow" class="external text" href="http://prophotos.ru/news/17098-trevoga-svobodnaya-s-emka-na-ulitsah-evropy-pod-ugrozoy">the original</a> on 27 June 2015<span class="reference-accessdate">. Retrieved <span class="nowrap">5 March</span> 2016</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.atitle=%D0%A2%D0%A0%D0%95%D0%92%D0%9E%D0%93%D0%90%21+%D0%A1%D0%B2%D0%BE%D0%B1%D0%BE%D0%B4%D0%BD%D0%B0%D1%8F+%D1%81%D1%8A%D0%B5%D0%BC%D0%BA%D0%B0+%D0%BD%D0%B0+%D1%83%D0%BB%D0%B8%D1%86%D0%B0%D1%85+%D0%95%D0%B2%D1%80%D0%BE%D0%BF%D1%8B+%E2%80%93+%D0%BF%D0%BE%D0%B4+%D1%83%D0%B3%D1%80%D0%BE%D0%B7%D0%BE%D0%B9&amp;rft.date=2015-06-23&amp;rft_id=http%3A%2F%2Fprophotos.ru%2Fnews%2F17098-trevoga-svobodnaya-s-emka-na-ulitsah-evropy-pod-ugrozoy&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-introducingyournew-62"><span class="mw-cite-backlink"><b><a href="#cite_ref-introducingyournew_62-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation news">The ed17 (21 January 2015). <a class="external text" href="https://en.wikipedia.org/wiki/Wikipedia:Wikipedia_Signpost/2015-01-21/From_the_editor">"From the editor: Introducing your new editors-in-chief"</a>. <i>The Signpost</i><span class="reference-accessdate">. Retrieved <span class="nowrap">1 March</span> 2016</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=The+Signpost&amp;rft.atitle=From+the+editor%3A+Introducing+your+new+editors-in-chief&amp;rft.date=2015-01-21&amp;rft.au=The+ed17&amp;rft_id=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FWikipedia%3AWikipedia_Signpost%2F2015-01-21%2FFrom_the_editor&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-includesyou-63"><span class="mw-cite-backlink"><b><a href="#cite_ref-includesyou_63-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation news">Go Phightins! and Gamaliel (28 January 2015). <a class="external text" href="https://en.wikipedia.org/w/index.php?title=Wikipedia:Wikipedia_Signpost/2015-01-28/From_the_editor&amp;oldid=644803485">"From the editor: An editorial board that includes you"</a>. <i>The Signpost</i><span class="reference-accessdate">. Retrieved <span class="nowrap">1 March</span> 2016</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=The+Signpost&amp;rft.atitle=From+the+editor%3A+An+editorial+board+that+includes+you&amp;rft.date=2015-01-28&amp;rft.au=Go+Phightins%21+and+Gamaliel&amp;rft_id=https%3A%2F%2Fen.wikipedia.org%2Fw%2Findex.php%3Ftitle%3DWikipedia%3AWikipedia_Signpost%2F2015-01-28%2FFrom_the_editor%26oldid%3D644803485&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-sociologicalforum-64"><span class="mw-cite-backlink"><b><a href="#cite_ref-sociologicalforum_64-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation journal">Konieczny, Piotr (March 2009). "Governance, Organization, and Democracy on the Internet: The Iron Law and the Evolution of Wikipedia". <i><a href="/wiki/Sociological_Forum" title="Sociological Forum">Sociological Forum</a></i>. <a href="/wiki/John_Wiley_%26_Sons" title="John Wiley &amp; Sons">Wiley</a>. <b>24</b> (1): 167. <a href="/wiki/JSTOR" title="JSTOR">JSTOR</a>&nbsp;<a rel="nofollow" class="external text" href="//www.jstor.org/stable/40210340">40210340</a>. <span style="font-size:90%; color:#555">(Subscription required (<span title="The site requires a paid subscription to access this page." style="border-bottom:1px dotted;cursor:help">help</span>))</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Sociological+Forum&amp;rft.atitle=Governance%2C+Organization%2C+and+Democracy+on+the+Internet%3A+The+Iron+Law+and+the+Evolution+of+Wikipedia&amp;rft.volume=24&amp;rft.issue=1&amp;rft.pages=167&amp;rft.date=2009-03&amp;rft_id=%2F%2Fwww.jstor.org%2Fstable%2F40210340&amp;rft.aulast=Konieczny&amp;rft.aufirst=Piotr&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-interface-65"><span class="mw-cite-backlink"><b><a href="#cite_ref-interface_65-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation journal">Konieczny, Piotr. <a rel="nofollow" class="external text" href="https://web.archive.org/web/20120607013320/http://interfacejournal.nuim.ie/wordpress/wp-content/uploads/2010/11/Interface-1-2-pp212-232-Konieczny.pdf">"Wikipedia: community or social movement?"</a> <span style="font-size:85%;">(PDF)</span>. <i>Interface: A Journal for and about Social Movements</i>. <b>1</b> (2): 212–232. <a href="/wiki/International_Standard_Serial_Number" title="International Standard Serial Number">ISSN</a>&nbsp;<a rel="nofollow" class="external text" href="//www.worldcat.org/issn/2009-2431">2009-2431</a>. Archived from <a rel="nofollow" class="external text" href="http://interfacejournal.nuim.ie/wordpress/wp-content/uploads/2010/11/Interface-1-2-pp212-232-Konieczny.pdf">the original</a> <span style="font-size:85%;">(PDF)</span> on 7 June 2012<span class="reference-accessdate">. Retrieved <span class="nowrap">1 March</span> 2016</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Interface%3A+A+Journal+for+and+about+Social+Movements&amp;rft.atitle=Wikipedia%3A+community+or+social+movement%3F&amp;rft.volume=1&amp;rft.issue=2&amp;rft.pages=212-232&amp;rft.issn=2009-2431&amp;rft.aulast=Konieczny&amp;rft.aufirst=Piotr&amp;rft_id=http%3A%2F%2Finterfacejournal.nuim.ie%2Fwordpress%2Fwp-content%2Fuploads%2F2010%2F11%2FInterface-1-2-pp212-232-Konieczny.pdf&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-Bayliss2013-66"><span class="mw-cite-backlink"><b><a href="#cite_ref-Bayliss2013_66-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation journal">Bayliss, Gemma (January 2013). <a rel="nofollow" class="external text" href="http://www.tandfonline.com/doi/abs/10.1080/13614533.2012.740439">"Exploring the Cautionary Attitude Toward Wikipedia in Higher Education: Implications for Higher Education Institutions"</a>. <i>New Review of Academic Librarianship</i>. <b>19</b> (1): 39. <a href="/wiki/Digital_object_identifier" title="Digital object identifier">doi</a>:<a rel="nofollow" class="external text" href="//doi.org/10.1080%2F13614533.2012.740439">10.1080/13614533.2012.740439</a>. <a href="/wiki/International_Standard_Serial_Number" title="International Standard Serial Number">ISSN</a>&nbsp;<a rel="nofollow" class="external text" href="//www.worldcat.org/issn/1361-4533">1361-4533</a><span class="reference-accessdate">. Retrieved <span class="nowrap">1 March</span> 2016</span> – via <a href="/wiki/EBSCO_Host" class="mw-redirect" title="EBSCO Host">EBSCO Host</a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=New+Review+of+Academic+Librarianship&amp;rft.atitle=Exploring+the+Cautionary+Attitude+Toward+Wikipedia+in+Higher+Education%3A+Implications+for+Higher+Education+Institutions&amp;rft.volume=19&amp;rft.issue=1&amp;rft.pages=39&amp;rft.date=2013-01&amp;rft_id=info%3Adoi%2F10.1080%2F13614533.2012.740439&amp;rft.issn=1361-4533&amp;rft.aulast=Bayliss&amp;rft.aufirst=Gemma&amp;rft_id=http%3A%2F%2Fwww.tandfonline.com%2Fdoi%2Fabs%2F10.1080%2F13614533.2012.740439&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-yan2011-67"><span class="mw-cite-backlink"><b><a href="#cite_ref-yan2011_67-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation book">Yan, Guanhua; Arackaparambil, Chrisil. "Wiki-watchdog: Anomaly detection in Wikipedia through a distributional lens". <a rel="nofollow" class="external text" href="http://permalink.lanl.gov/object/tr?what=info:lanl-repo/lareport/LA-UR-11-02385"><i>Proceedings of the 2011 IEEE/WIC/ACM International Conferences on Web Intelligence and Intelligent Agent Technology – Volume 01</i></a>. IEEE Computer Society Washington. pp.&nbsp;257–264. <a href="/wiki/Digital_object_identifier" title="Digital object identifier">doi</a>:<a rel="nofollow" class="external text" href="//doi.org/10.1109%2FWI-IAT.2011.86">10.1109/WI-IAT.2011.86</a>. <a href="/wiki/International_Standard_Book_Number" title="International Standard Book Number">ISBN</a>&nbsp;<a href="/wiki/Special:BookSources/978-0-7695-4513-4" title="Special:BookSources/978-0-7695-4513-4">978-0-7695-4513-4</a><span class="reference-accessdate">. Retrieved <span class="nowrap">1 March</span> 2016</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.atitle=Wiki-watchdog%3A+Anomaly+detection+in+Wikipedia+through+a+distributional+lens&amp;rft.btitle=Proceedings+of+the+2011+IEEE%2FWIC%2FACM+International+Conferences+on+Web+Intelligence+and+Intelligent+Agent+Technology+%E2%80%93+Volume+01&amp;rft.pages=257-264&amp;rft.pub=IEEE+Computer+Society+Washington&amp;rft_id=info%3Adoi%2F10.1109%2FWI-IAT.2011.86&amp;rft.isbn=978-0-7695-4513-4&amp;rft.aulast=Yan&amp;rft.aufirst=Guanhua&amp;rft.au=Arackaparambil%2C+Chrisil&amp;rft_id=http%3A%2F%2Fpermalink.lanl.gov%2Fobject%2Ftr%3Fwhat%3Dinfo%3Alanl-repo%2Flareport%2FLA-UR-11-02385&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-allthenews-68"><span class="mw-cite-backlink"><b><a href="#cite_ref-allthenews_68-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation news">Dee, Jonathan (1 July 2007). <a rel="nofollow" class="external text" href="https://www.nytimes.com/2007/07/01/magazine/01WIKIPEDIA-t.html">"All the News That's Fit to Print Out"</a>. <i><a href="/wiki/The_New_York_Times" title="The New York Times">The New York Times</a></i><span class="reference-accessdate">. Retrieved <span class="nowrap">29 February</span> 2016</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=The+New+York+Times&amp;rft.atitle=All+the+News+That%27s+Fit+to+Print+Out&amp;rft.date=2007-07-01&amp;rft.aulast=Dee&amp;rft.aufirst=Jonathan&amp;rft_id=https%3A%2F%2Fwww.nytimes.com%2F2007%2F07%2F01%2Fmagazine%2F01WIKIPEDIA-t.html&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-Orlowski2016-69"><span class="mw-cite-backlink"><b><a href="#cite_ref-Orlowski2016_69-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation news">Orlowski, Andrew (12 January 2016). <a rel="nofollow" class="external text" href="https://www.theregister.co.uk/2016/01/12/wikimedia_dumps_elected_trustee/">"Wikimedia Foundation bins community-elected trustee"</a>. <i><a href="/wiki/The_Register" title="The Register">The Register</a></i>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=The+Register&amp;rft.atitle=Wikimedia+Foundation+bins+community-elected+trustee&amp;rft.date=2016-01-12&amp;rft.aulast=Orlowski&amp;rft.aufirst=Andrew&amp;rft_id=https%3A%2F%2Fwww.theregister.co.uk%2F2016%2F01%2F12%2Fwikimedia_dumps_elected_trustee%2F&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-McCambridge2016-70"><span class="mw-cite-backlink"><b><a href="#cite_ref-McCambridge2016_70-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">McCambridge, Ruth (16 February 2016). <a rel="nofollow" class="external text" href="https://nonprofitquarterly.org/2016/02/16/knight-foundation-grant-request-tears-at-wikipedias-community/">"Knight Foundation Grant Request Tears at Wikipedia's Community"</a>. <i>Nonprofit Quarterly</i>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=unknown&amp;rft.jtitle=Nonprofit+Quarterly&amp;rft.atitle=Knight+Foundation+Grant+Request+Tears+at+Wikipedia%27s+Community&amp;rft.date=2016-02-16&amp;rft.aulast=McCambridge&amp;rft.aufirst=Ruth&amp;rft_id=https%3A%2F%2Fnonprofitquarterly.org%2F2016%2F02%2F16%2Fknight-foundation-grant-request-tears-at-wikipedias-community%2F&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-Kleinz2016-71"><span class="mw-cite-backlink"><b><a href="#cite_ref-Kleinz2016_71-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation web">Kleinz, Torsten (27 February 2016). <a rel="nofollow" class="external text" href="http://www.heise.de/newsticker/meldung/Kommentar-Wie-geht-es-weiter-mit-der-Wikimedia-Foundation-3119568.html">"Kommentar: Wie geht es weiter mit der Wikimedia Foundation?"</a>. <i>Heise Online</i>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=unknown&amp;rft.jtitle=Heise+Online&amp;rft.atitle=Kommentar%3A+Wie+geht+es+weiter+mit+der+Wikimedia+Foundation%3F&amp;rft.date=2016-02-27&amp;rft.aulast=Kleinz&amp;rft.aufirst=Torsten&amp;rft_id=http%3A%2F%2Fwww.heise.de%2Fnewsticker%2Fmeldung%2FKommentar-Wie-geht-es-weiter-mit-der-Wikimedia-Foundation-3119568.html&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                        <li id="cite_note-Broughton2008-72"><span class="mw-cite-backlink"><b><a href="#cite_ref-Broughton2008_72-0"><span class="cite-accessibility-label">Jump up </span>^</a></b></span> <span class="reference-text"><cite class="citation book">John Broughton (25 January 2008). <a rel="nofollow" class="external text" href="https://books.google.com/books?id=h37N0BvkVSUC&amp;pg=PA454"><i>Wikipedia: The Missing Manual: The Missing Manual</i></a>. "O'Reilly Media, Inc.". pp.&nbsp;454–. <a href="/wiki/International_Standard_Book_Number" title="International Standard Book Number">ISBN</a>&nbsp;<a href="/wiki/Special:BookSources/978-0-596-55377-7" title="Special:BookSources/978-0-596-55377-7">978-0-596-55377-7</a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Wikipedia%3A+The+Missing+Manual%3A+The+Missing+Manual&amp;rft.pages=454-&amp;rft.pub=%22O%27Reilly+Media%2C+Inc.%22&amp;rft.date=2008-01-25&amp;rft.isbn=978-0-596-55377-7&amp;rft.au=John+Broughton&amp;rft_id=https%3A%2F%2Fbooks.google.com%2Fbooks%3Fid%3Dh37N0BvkVSUC%26pg%3DPA454&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3AEnglish+Wikipedia" class="Z3988"><span style="display:none;">&nbsp;</span></span></span></li>
                    </ol>
                </div>
                <h2><span class="mw-headline" id="References">References</span></h2>
                <ul>
                    <li><a href="/wiki/Andrew_Lih" title="Andrew Lih">Lih, Andrew</a>. <i><a href="/wiki/The_Wikipedia_Revolution:_How_a_Bunch_of_Nobodies_Created_the_World%27s_Greatest_Encyclopedia" class="mw-redirect" title="The Wikipedia Revolution: How a Bunch of Nobodies Created the World's Greatest Encyclopedia">The Wikipedia Revolution: How a Bunch of Nobodies Created the World's Greatest Encyclopedia</a></i>. <a href="/wiki/Hyperion_Books" title="Hyperion Books">Hyperion</a>, New York City. 2009. First Edition. <a href="/wiki/International_Standard_Book_Number" title="International Standard Book Number">ISBN</a>&nbsp;<a href="/wiki/Special:BookSources/978-1-4013-0371-6" title="Special:BookSources/978-1-4013-0371-6">978-1-4013-0371-6</a> (alkaline paper).</li>
                </ul>
                <h2><span class="mw-headline" id="External_links">External links</span></h2>
                <table role="presentation" class="mbox-small plainlinks sistersitebox" style="background-color:#f9f9f9;border:1px solid #aaa;color:#000">
                    <tbody><tr>
                        <td class="mbox-image"><img alt="" src="//upload.wikimedia.org/wikipedia/en/thumb/4/4a/Commons-logo.svg/30px-Commons-logo.svg.png" width="30" height="40" class="noviewer" srcset="//upload.wikimedia.org/wikipedia/en/thumb/4/4a/Commons-logo.svg/45px-Commons-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/4/4a/Commons-logo.svg/59px-Commons-logo.svg.png 2x" data-file-width="1024" data-file-height="1376"></td>
                        <td class="mbox-text plainlist">Wikimedia Commons has media related to <i><b><a href="https://commons.wikimedia.org/wiki/Category:English_Wikipedia" class="extiw" title="commons:Category:English Wikipedia">English Wikipedia</a></b></i>.</td>
                    </tr>
                    </tbody></table>
                <ul>
                    <li><a class="external text" href="https://en.wikipedia.org">English Wikipedia</a></li>
                    <li><a class="external text" href="https://en.m.wikipedia.org">English Wikipedia mobile</a></li>
                    <li><a href="https://meta.wikimedia.org/wiki/English_Wikipedia" class="extiw" title="meta:English Wikipedia">English Wikipedia on Meta-Wiki</a></li>
                </ul>
                <div role="navigation" class="navbox" aria-labelledby="Wikipedia" style="padding:3px">
                    <table class="nowraplinks hlist collapsible autocollapse navbox-inner" style="border-spacing:0;background:transparent;color:inherit" id="collapsibleTable1">
                        <tbody><tr>
                            <th scope="col" class="navbox-title" colspan="2"><span class="collapseButton">[<a id="collapseButton1" href="#">show</a>]</span>
                                <div class="plainlinks hlist navbar mini">
                                    <ul>
                                        <li class="nv-view"><a href="/wiki/Template:Wikipedia" title="Template:Wikipedia"><abbr title="View this template" style=";;background:none transparent;border:none;-moz-box-shadow:none;-webkit-box-shadow:none;box-shadow:none;">v</abbr></a></li>
                                        <li class="nv-talk"><a href="/wiki/Template_talk:Wikipedia" title="Template talk:Wikipedia"><abbr title="Discuss this template" style=";;background:none transparent;border:none;-moz-box-shadow:none;-webkit-box-shadow:none;box-shadow:none;">t</abbr></a></li>
                                        <li class="nv-edit"><a class="external text" href="//en.wikipedia.org/w/index.php?title=Template:Wikipedia&amp;action=edit"><abbr title="Edit this template" style=";;background:none transparent;border:none;-moz-box-shadow:none;-webkit-box-shadow:none;box-shadow:none;">e</abbr></a></li>
                                    </ul>
                                </div>
                                <div id="Wikipedia" style="font-size:114%;margin:0 4em"><a href="/wiki/Wikipedia" title="Wikipedia">Wikipedia</a></div>
                            </th>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Outline_of_Wikipedia" title="Outline of Wikipedia">Overview</a></th>
                            <td class="navbox-list navbox-even" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Censorship_of_Wikipedia" title="Censorship of Wikipedia">Censorship</a></li>
                                        <li><a href="/wiki/Conflict-of-interest_editing_on_Wikipedia" title="Conflict-of-interest editing on Wikipedia">Conflict-of-interest editing</a></li>
                                        <li><a href="/wiki/Criticism_of_Wikipedia" title="Criticism of Wikipedia">Criticism</a></li>
                                        <li><a href="/wiki/Deletionism_and_inclusionism_in_Wikipedia" title="Deletionism and inclusionism in Wikipedia">Deletionism and inclusionism</a></li>
                                        <li><a href="/wiki/Gender_bias_on_Wikipedia" title="Gender bias on Wikipedia">Gender bias</a></li>
                                        <li><a href="/wiki/Racial_bias_on_Wikipedia" title="Racial bias on Wikipedia">Racial bias</a></li>
                                        <li><a href="/wiki/MediaWiki" title="MediaWiki">MediaWiki</a></li>
                                        <li><a href="/wiki/Notability_in_the_English_Wikipedia" title="Notability in the English Wikipedia">Notability</a></li>
                                        <li><a href="/wiki/Reliability_of_Wikipedia" title="Reliability of Wikipedia">Reliability</a></li>
                                        <li><a href="/wiki/Vandalism_on_Wikipedia" title="Vandalism on Wikipedia">Vandalism</a></li>
                                        <li><a href="/wiki/Predictions_of_Wikipedia%27s_end" title="Predictions of Wikipedia's end">Predictions of the project's end</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/Wikipedia_community" title="Wikipedia community">Community</a></th>
                            <td class="navbox-list navbox-odd" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Wikipedia_administrators" title="Wikipedia administrators">Administrators</a></li>
                                        <li><a href="/wiki/Arbitration_Committee_of_the_English_Wikipedia" title="Arbitration Committee of the English Wikipedia">Arbitration Committee of the English Wikipedia</a></li>
                                        <li><a href="/wiki/Edit-a-thon" title="Edit-a-thon">Edit-a-thon</a></li>
                                        <li><a href="/wiki/List_of_Wikipedias" title="List of Wikipedias">List of Wikipedias</a></li>
                                        <li><i><a href="/wiki/The_Signpost" title="The Signpost">The Signpost</a></i></li>
                                        <li><a href="/wiki/Wikipedian_in_residence" title="Wikipedian in residence">Wikipedian in residence</a></li>
                                        <li><a href="/wiki/Wikimania" title="Wikimania">Wikimania</a></li>
                                        <li><a href="/wiki/WikiProject" title="WikiProject">WikiProject</a></li>
                                        <li><a href="/wiki/Women_in_Red" title="Women in Red">Women in Red</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">People</th>
                            <td class="navbox-list navbox-even" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Florence_Devouard" title="Florence Devouard">Florence Devouard</a></li>
                                        <li><a href="/wiki/Sue_Gardner" title="Sue Gardner">Sue Gardner</a></li>
                                        <li><a href="/wiki/James_Heilman" title="James Heilman">James Heilman</a></li>
                                        <li><a href="/wiki/Katherine_Maher" title="Katherine Maher">Katherine Maher</a></li>
                                        <li><a href="/wiki/Magnus_Manske" title="Magnus Manske">Magnus Manske</a></li>
                                        <li><a href="/wiki/Erik_M%C3%B6ller" title="Erik Möller">Erik Möller</a></li>
                                        <li><a href="/wiki/Larry_Sanger" title="Larry Sanger">Larry Sanger</a></li>
                                        <li><a href="/wiki/Lila_Tretikov" title="Lila Tretikov">Lila Tretikov</a></li>
                                        <li><a href="/wiki/Jimmy_Wales" title="Jimmy Wales">Jimmy Wales</a></li>
                                        <li><a href="/wiki/Wikipedia_community" title="Wikipedia community">Wikipedians</a></li>
                                        <li><a href="/wiki/Wikipedian_of_the_Year" title="Wikipedian of the Year">Wikipedian of the Year</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%"><a href="/wiki/History_of_Wikipedia" title="History of Wikipedia">History</a></th>
                            <td class="navbox-list navbox-odd" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Bomis" title="Bomis">Bomis</a></li>
                                        <li><a href="/wiki/Wikipedia_logo" title="Wikipedia logo">Logo</a></li>
                                        <li><a href="/wiki/List_of_Wikipedia_controversies" title="List of Wikipedia controversies">Controversies</a>
                                            <ul>
                                                <li><a href="/wiki/United_States_Congressional_staff_edits_to_Wikipedia" title="United States Congressional staff edits to Wikipedia">U.S. Congressional staff edits</a></li>
                                                <li><a href="/wiki/Essjay_controversy" title="Essjay controversy">Essjay controversy</a></li>
                                                <li><a href="/wiki/Wikipedia_Seigenthaler_biography_incident" title="Wikipedia Seigenthaler biography incident">Seigenthaler biography incident</a></li>
                                                <li><a href="/wiki/Henryk_Batuta_hoax" title="Henryk Batuta hoax">Henryk Batuta hoax</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/wiki/Internet_Watch_Foundation_and_Wikipedia" title="Internet Watch Foundation and Wikipedia">Internet Watch Foundation</a></li>
                                        <li><a href="/wiki/Church_of_Scientology_editing_on_Wikipedia" title="Church of Scientology editing on Wikipedia">Scientology</a></li>
                                        <li><a href="/wiki/Italian_Wikipedia#2011_mass_blanking_protest" title="Italian Wikipedia">Italian Wikipedia blackout</a></li>
                                        <li><a href="/wiki/Protests_against_SOPA_and_PIPA#Wikimedia_community" title="Protests against SOPA and PIPA">English Wikipedia blackout</a></li>
                                        <li><a href="/wiki/Hillsborough_Wikipedia_posts" title="Hillsborough Wikipedia posts">Hillsborough Wikipedia posts</a></li>
                                        <li><a href="/wiki/MyWikiBiz" title="MyWikiBiz">MyWikiBiz</a></li>
                                        <li><a href="/wiki/Lsjbot" title="Lsjbot">Lsjbot</a></li>
                                        <li><a href="/wiki/VisualEditor" title="VisualEditor">VisualEditor</a></li>
                                        <li><a href="/wiki/Art%2BFeminism" title="Art+Feminism">Art+Feminism</a></li>
                                        <li><a href="/wiki/1Lib1Ref" title="1Lib1Ref">#1Lib1Ref</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">Honors</th>
                            <td class="navbox-list navbox-even" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Quadriga_(award)" title="Quadriga (award)">2008 Quadriga award</a></li>
                                        <li><i><a href="/wiki/Wikipedia_Monument" title="Wikipedia Monument">Wikipedia Monument</a></i></li>
                                        <li><a href="/wiki/Erasmus_Prize" title="Erasmus Prize">2015 Erasmus Prize</a></li>
                                        <li><a href="/wiki/Princess_of_Asturias_Awards" title="Princess of Asturias Awards">2015 Princess of Asturias Award</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">References<br>
                                and analysis</th>
                            <td class="navbox-list navbox-odd" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Wikipedia_in_culture" title="Wikipedia in culture">Cultural</a></li>
                                        <li><a href="/wiki/Bibliography_of_Wikipedia" title="Bibliography of Wikipedia">Bibliography</a></li>
                                        <li><a href="/wiki/List_of_films_about_Wikipedia" title="List of films about Wikipedia">Films</a></li>
                                        <li><a href="/wiki/Academic_studies_about_Wikipedia" title="Academic studies about Wikipedia">Academic studies</a></li>
                                        <li><a href="/wiki/WikiScanner" title="WikiScanner">WikiScanner</a></li>
                                        <li><a href="/wiki/Wikipedia_Review" title="Wikipedia Review">Wikipedia Review</a></li>
                                        <li><a href="/wiki/Wikipediocracy" title="Wikipediocracy">Wikipediocracy</a></li>
                                        <li><a href="/wiki/Wiki-Watch" title="Wiki-Watch">Wiki-Watch</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">Mobile access</th>
                            <td class="navbox-list navbox-even" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/List_of_Wikipedia_mobile_applications" title="List of Wikipedia mobile applications">Apps</a></li>
                                        <li><a href="/wiki/QRpedia" title="QRpedia">QRpedia</a></li>
                                        <li><a href="/wiki/Wapedia" title="Wapedia">Wapedia</a></li>
                                        <li><a href="/wiki/WikiNodes" title="WikiNodes">WikiNodes</a></li>
                                        <li><a href="/wiki/Wikipedia_Zero" title="Wikipedia Zero">Wikipedia Zero</a></li>
                                        <li><a href="/wiki/Wikiwand" title="Wikiwand">Wikiwand</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">Content use</th>
                            <td class="navbox-list navbox-odd" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Books_LLC" title="Books LLC">Books LLC</a></li>
                                        <li><a href="/wiki/DBpedia" title="DBpedia">DBpedia</a></li>
                                        <li><a href="/wiki/Deletionpedia" title="Deletionpedia">Deletionpedia</a></li>
                                        <li><a href="/wiki/Kiwix" title="Kiwix">Kiwix</a></li>
                                        <li><a href="/wiki/WikiReader" title="WikiReader">WikiReader</a></li>
                                        <li><a href="/wiki/Science_information_on_Wikipedia" title="Science information on Wikipedia">Science information</a></li>
                                        <li><a href="/wiki/Health_information_on_Wikipedia" title="Health information on Wikipedia">Health information</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">Similar projects</th>
                            <td class="navbox-list navbox-even" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Interpedia" title="Interpedia">Interpedia</a></li>
                                        <li><a href="/wiki/Nupedia" title="Nupedia">Nupedia</a></li>
                                        <li><a href="/wiki/Citizendium" title="Citizendium">Citizendium</a></li>
                                        <li><a href="/wiki/Enciclopedia_Libre_Universal_en_Espa%C3%B1ol" title="Enciclopedia Libre Universal en Español">Enciclopedia Libre Universal en Español</a></li>
                                        <li><a href="/wiki/Everipedia" title="Everipedia">Everipedia</a></li>
                                        <li><a href="/wiki/Veropedia" title="Veropedia">Veropedia</a></li>
                                        <li><a href="/wiki/List_of_online_encyclopedias" title="List of online encyclopedias">List of online encyclopedias</a></li>
                                        <li><a href="/wiki/List_of_wikis" title="List of wikis">List of wikis</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">Related</th>
                            <td class="navbox-list navbox-odd" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Wikimedia_Foundation" title="Wikimedia Foundation">Wikimedia Foundation</a></li>
                                        <li><a href="/wiki/Wikimedia_movement" title="Wikimedia movement">Wikimedia movement</a></li>
                                        <li><i><a href="/wiki/The_Iraq_War:_A_Historiography_of_Wikipedia_Changelogs" title="The Iraq War: A Historiography of Wikipedia Changelogs">The Iraq War: A Historiography of Wikipedia Changelogs</a></i></li>
                                        <li><a href="/wiki/Print_Wikipedia" title="Print Wikipedia">Print Wikipedia</a></li>
                                        <li><i><a href="/wiki/Magna_Carta_(An_Embroidery)" title="Magna Carta (An Embroidery)">Magna Carta (An Embroidery)</a></i></li>
                                        <li><a href="/wiki/274301_Wikipedia" title="274301 Wikipedia">274301 Wikipedia</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <td class="navbox-abovebelow" colspan="2">
                                <div>
                                    <ul>
                                        <li><img alt="Category" src="//upload.wikimedia.org/wikipedia/en/thumb/4/48/Folder_Hexagonal_Icon.svg/16px-Folder_Hexagonal_Icon.svg.png" title="Category" width="16" height="14" srcset="//upload.wikimedia.org/wikipedia/en/thumb/4/48/Folder_Hexagonal_Icon.svg/24px-Folder_Hexagonal_Icon.svg.png 1.5x, //upload.wikimedia.org/wikipedia/en/thumb/4/48/Folder_Hexagonal_Icon.svg/32px-Folder_Hexagonal_Icon.svg.png 2x" data-file-width="36" data-file-height="31"> <a href="/wiki/Category:Wikipedia" title="Category:Wikipedia">Category</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
                <div role="navigation" class="navbox" aria-labelledby="List_of_Wikipedias_by_article_count" style="padding:3px">
                    <table class="nowraplinks collapsible autocollapse navbox-inner" style="border-spacing:0;background:transparent;color:inherit" id="collapsibleTable2">
                        <tbody><tr>
                            <th scope="col" class="navbox-title" colspan="2"><span class="collapseButton">[<a id="collapseButton2" href="#">show</a>]</span>
                                <div class="plainlinks hlist navbar mini">
                                    <ul>
                                        <li class="nv-view"><a href="/wiki/Template:Wikipedias" title="Template:Wikipedias"><abbr title="View this template" style=";;background:none transparent;border:none;-moz-box-shadow:none;-webkit-box-shadow:none;box-shadow:none;">v</abbr></a></li>
                                        <li class="nv-talk"><a href="/wiki/Template_talk:Wikipedias" title="Template talk:Wikipedias"><abbr title="Discuss this template" style=";;background:none transparent;border:none;-moz-box-shadow:none;-webkit-box-shadow:none;box-shadow:none;">t</abbr></a></li>
                                        <li class="nv-edit"><a class="external text" href="//en.wikipedia.org/w/index.php?title=Template:Wikipedias&amp;action=edit"><abbr title="Edit this template" style=";;background:none transparent;border:none;-moz-box-shadow:none;-webkit-box-shadow:none;box-shadow:none;">e</abbr></a></li>
                                    </ul>
                                </div>
                                <div id="List_of_Wikipedias_by_article_count" style="font-size:114%;margin:0 4em"><a href="/wiki/List_of_Wikipedias" title="List of Wikipedias">List of Wikipedias</a> by article count</div>
                            </th>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">5,000,000+</th>
                            <td class="navbox-list navbox-odd hlist" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a class="mw-selflink selflink">English</a></li>
                                        <li><a href="/wiki/Cebuano_Wikipedia" class="mw-redirect" title="Cebuano Wikipedia">Cebuano</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">2,000,000+</th>
                            <td class="navbox-list navbox-even hlist" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Swedish_Wikipedia" title="Swedish Wikipedia">Swedish</a></li>
                                        <li><a href="/wiki/German_Wikipedia" title="German Wikipedia">German</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">1,000,000+</th>
                            <td class="navbox-list navbox-odd hlist" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/French_Wikipedia" title="French Wikipedia">French</a></li>
                                        <li><a href="/wiki/Dutch_Wikipedia" title="Dutch Wikipedia">Dutch</a></li>
                                        <li><a href="/wiki/Russian_Wikipedia" title="Russian Wikipedia">Russian</a></li>
                                        <li><a href="/wiki/Italian_Wikipedia" title="Italian Wikipedia">Italian</a></li>
                                        <li><a href="/wiki/Spanish_Wikipedia" title="Spanish Wikipedia">Spanish</a></li>
                                        <li><a href="/wiki/Polish_Wikipedia" title="Polish Wikipedia">Polish</a></li>
                                        <li><a href="/wiki/Waray_Wikipedia" title="Waray Wikipedia">Waray</a></li>
                                        <li><a href="/wiki/Vietnamese_Wikipedia" title="Vietnamese Wikipedia">Vietnamese</a></li>
                                        <li><a href="/wiki/Japanese_Wikipedia" title="Japanese Wikipedia">Japanese</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">500,000+</th>
                            <td class="navbox-list navbox-even hlist" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Portuguese_Wikipedia" title="Portuguese Wikipedia">Portuguese</a></li>
                                        <li><a href="/wiki/Chinese_Wikipedia" title="Chinese Wikipedia">Chinese</a></li>
                                        <li><a href="/wiki/Ukrainian_Wikipedia" title="Ukrainian Wikipedia">Ukrainian</a></li>
                                        <li><a href="/wiki/Serbian_Wikipedia" title="Serbian Wikipedia">Serbian</a></li>
                                        <li><a href="/wiki/Persian_Wikipedia" title="Persian Wikipedia">Persian</a></li>
                                        <li><a href="/wiki/Catalan_Wikipedia" title="Catalan Wikipedia">Catalan</a></li>
                                        <li><a href="/wiki/Arabic_Wikipedia" title="Arabic Wikipedia">Arabic</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">200,000+</th>
                            <td class="navbox-list navbox-odd hlist" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Norwegian_Wikipedia" title="Norwegian Wikipedia">Norwegian (bokmål/riksmål)</a></li>
                                        <li><a href="/wiki/Serbo-Croatian_Wikipedia" title="Serbo-Croatian Wikipedia">Serbo-Croatian</a></li>
                                        <li><a href="/wiki/Finnish_Wikipedia" title="Finnish Wikipedia">Finnish</a></li>
                                        <li><a href="/wiki/Hungarian_Wikipedia" title="Hungarian Wikipedia">Hungarian</a></li>
                                        <li><a href="/wiki/Indonesian_Wikipedia" title="Indonesian Wikipedia">Indonesian</a></li>
                                        <li><a href="/wiki/Korean_Wikipedia" title="Korean Wikipedia">Korean</a></li>
                                        <li><a href="/wiki/Czech_Wikipedia" title="Czech Wikipedia">Czech</a></li>
                                        <li><a href="/wiki/Romanian_Wikipedia" title="Romanian Wikipedia">Romanian</a></li>
                                        <li><a href="/wiki/Malay_Wikipedia" title="Malay Wikipedia">Malay</a></li>
                                        <li><a href="/wiki/Turkish_Wikipedia" title="Turkish Wikipedia">Turkish</a></li>
                                        <li><a href="/wiki/Basque_Wikipedia" title="Basque Wikipedia">Basque</a></li>
                                        <li><a href="/wiki/Esperanto_Wikipedia" title="Esperanto Wikipedia">Esperanto</a></li>
                                        <li><a href="/wiki/Bulgarian_Wikipedia" title="Bulgarian Wikipedia">Bulgarian</a></li>
                                        <li><a href="/wiki/Armenian_Wikipedia" title="Armenian Wikipedia">Armenian</a></li>
                                        <li><a href="/wiki/Danish_Wikipedia" title="Danish Wikipedia">Danish</a></li>
                                        <li><a href="/wiki/Southern_Min_Wikipedia" title="Southern Min Wikipedia">Southern Min</a></li>
                                        <li><a href="/wiki/Slovak_Wikipedia" title="Slovak Wikipedia">Slovak</a></li>
                                        <li><a href="/wiki/Minangkabau_Wikipedia" class="mw-redirect" title="Minangkabau Wikipedia">Minangkabau</a></li>
                                        <li><a href="/wiki/Kazakh_Wikipedia" title="Kazakh Wikipedia">Kazakh</a></li>
                                        <li><a href="/wiki/Hebrew_Wikipedia" title="Hebrew Wikipedia">Hebrew</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">100,000+</th>
                            <td class="navbox-list navbox-even hlist" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Lithuanian_Wikipedia" title="Lithuanian Wikipedia">Lithuanian</a></li>
                                        <li><a href="/wiki/Croatian_Wikipedia" title="Croatian Wikipedia">Croatian</a></li>
                                        <li><a href="/wiki/Estonian_Wikipedia" title="Estonian Wikipedia">Estonian</a></li>
                                        <li><a href="/wiki/Chechen_Wikipedia" class="mw-redirect" title="Chechen Wikipedia">Chechen</a></li>
                                        <li><a href="/wiki/Slovene_Wikipedia" title="Slovene Wikipedia">Slovene</a></li>
                                        <li><a href="/wiki/Belarusian_Wikipedia" title="Belarusian Wikipedia">Belarusian</a></li>
                                        <li><a href="/wiki/Galician_Wikipedia" title="Galician Wikipedia">Galician</a></li>
                                        <li><a href="/wiki/Greek_Wikipedia" title="Greek Wikipedia">Greek</a></li>
                                        <li><a href="/wiki/Norwegian_Wikipedia" title="Norwegian Wikipedia">Norwegian (nynorsk)</a></li>
                                        <li><a href="/wiki/Simple_English_Wikipedia" title="Simple English Wikipedia">Simple English</a></li>
                                        <li><a href="/wiki/Azerbaijani_Wikipedia" title="Azerbaijani Wikipedia">Azerbaijani</a></li>
                                        <li><a href="/wiki/Uzbek_Wikipedia" title="Uzbek Wikipedia">Uzbek</a></li>
                                        <li><a href="/wiki/Latin_Wikipedia" title="Latin Wikipedia">Latin</a></li>
                                        <li><a href="/wiki/Urdu_Wikipedia" title="Urdu Wikipedia">Urdu</a></li>
                                        <li><a href="/wiki/Hindi_Wikipedia" title="Hindi Wikipedia">Hindi</a></li>
                                        <li><a href="/wiki/Thai_Wikipedia" title="Thai Wikipedia">Thai</a></li>
                                        <li><a href="/wiki/Volap%C3%BCk_Wikipedia" class="mw-redirect" title="Volapük Wikipedia">Volapük</a></li>
                                        <li><a href="/wiki/Georgian_Wikipedia" title="Georgian Wikipedia">Georgian</a></li>
                                        <li><a href="/wiki/Tamil_Wikipedia" title="Tamil Wikipedia">Tamil</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">50,000+</th>
                            <td class="navbox-list navbox-odd hlist" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Welsh_Wikipedia" title="Welsh Wikipedia">Welsh</a></li>
                                        <li><a href="/wiki/Tajik_Wikipedia" class="mw-redirect" title="Tajik Wikipedia">Tajik</a></li>
                                        <li><a href="/wiki/Macedonian_Wikipedia" title="Macedonian Wikipedia">Macedonian</a></li>
                                        <li><a href="/wiki/Tagalog_Wikipedia" title="Tagalog Wikipedia">Tagalog</a></li>
                                        <li><a href="/wiki/Malagasy_Wikipedia" title="Malagasy Wikipedia">Malagasy</a></li>
                                        <li><a href="/wiki/Occitan_Wikipedia" title="Occitan Wikipedia">Occitan</a></li>
                                        <li><a href="/wiki/Latvian_Wikipedia" title="Latvian Wikipedia">Latvian</a></li>
                                        <li><a href="/wiki/Kyrgyz_Wikipedia" title="Kyrgyz Wikipedia">Kyrgyz</a></li>
                                        <li><a href="/wiki/Bosnian_Wikipedia" title="Bosnian Wikipedia">Bosnian</a></li>
                                        <li><a href="/wiki/Tatar_Wikipedia" title="Tatar Wikipedia">Tatar</a></li>
                                        <li><a href="/wiki/Nepal_Bhasa_Wikipedia" title="Nepal Bhasa Wikipedia">Newar</a></li>
                                        <li><a href="/wiki/Albanian_Wikipedia" title="Albanian Wikipedia">Albanian</a></li>
                                        <li><a href="/wiki/Telugu_Wikipedia" title="Telugu Wikipedia">Telugu</a></li>
                                        <li><a href="/wiki/Southern_Azerbaijani_Wikipedia" class="mw-redirect" title="Southern Azerbaijani Wikipedia">Southern Azerbaijani</a></li>
                                        <li><a href="/wiki/Cantonese_Wikipedia" title="Cantonese Wikipedia">Cantonese</a></li>
                                        <li><a href="/wiki/Piedmontese_Wikipedia" class="mw-redirect" title="Piedmontese Wikipedia">Piedmontese</a></li>
                                        <li><a href="/wiki/Breton_Wikipedia" title="Breton Wikipedia">Breton</a></li>
                                        <li><a href="/wiki/Belarusian_(Tara%C5%A1kievica)_Wikipedia" class="mw-redirect" title="Belarusian (Taraškievica) Wikipedia">Belarusian (Taraškievica)</a></li>
                                        <li><a href="/wiki/Asturian_Wikipedia" title="Asturian Wikipedia">Asturian</a></li>
                                        <li><a href="/wiki/Bengali_Wikipedia" title="Bengali Wikipedia">Bengali</a></li>
                                        <li><a href="/wiki/Malayalam_Wikipedia" title="Malayalam Wikipedia">Malayalam</a></li>
                                        <li><a href="/wiki/Haitian_Creole_Wikipedia" class="mw-redirect" title="Haitian Creole Wikipedia">Haitian</a></li>
                                        <li><a href="/wiki/Javanese_Wikipedia" title="Javanese Wikipedia">Javanese</a></li>
                                        <li><a href="/wiki/Luxembourgish_Wikipedia" title="Luxembourgish Wikipedia">Luxembourgish</a></li>
                                        <li><a href="/wiki/Marathi_Wikipedia" title="Marathi Wikipedia">Marathi</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">20,000+</th>
                            <td class="navbox-list navbox-even hlist" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Afrikaans_Wikipedia" title="Afrikaans Wikipedia">Afrikaans</a></li>
                                        <li><a href="/wiki/Scots_Wikipedia" title="Scots Wikipedia">Scots</a></li>
                                        <li><a href="/wiki/Western_Punjabi_Wikipedia" class="mw-redirect" title="Western Punjabi Wikipedia">Western Punjabi</a></li>
                                        <li><a href="/wiki/Irish_Wikipedia" title="Irish Wikipedia">Irish</a></li>
                                        <li><a href="/wiki/Icelandic_Wikipedia" class="mw-redirect" title="Icelandic Wikipedia">Icelandic</a></li>
                                        <li><a href="/wiki/Bashkir_Wikipedia" class="mw-redirect" title="Bashkir Wikipedia">Bashkir</a></li>
                                        <li><a href="/wiki/Chuvash_Wikipedia" title="Chuvash Wikipedia">Chuvash</a></li>
                                        <li><a href="/wiki/West_Frisian_Wikipedia" title="West Frisian Wikipedia">West Frisian</a></li>
                                        <li><a href="/wiki/Sundanese_Wikipedia" class="mw-redirect" title="Sundanese Wikipedia">Sundanese</a></li>
                                        <li><a href="/wiki/Swahili_Wikipedia" title="Swahili Wikipedia">Swahili</a></li>
                                        <li><a href="/wiki/Burmese_Wikipedia" title="Burmese Wikipedia">Burmese</a></li>
                                        <li><a href="/wiki/Lombard_Wikipedia" class="mw-redirect" title="Lombard Wikipedia">Lombard</a></li>
                                        <li><a href="/wiki/Aragonese_Wikipedia" title="Aragonese Wikipedia">Aragonese</a></li>
                                        <li><a href="/wiki/Yoruba_Wikipedia" title="Yoruba Wikipedia">Yoruba</a></li>
                                        <li><a href="/wiki/Nepali_Wikipedia" class="mw-redirect" title="Nepali Wikipedia">Nepali</a></li>
                                        <li><a href="/wiki/Gujarati_Wikipedia" class="mw-redirect" title="Gujarati Wikipedia">Gujarati</a></li>
                                        <li><a href="/wiki/Punjabi_Wikipedia" title="Punjabi Wikipedia">Punjabi</a></li>
                                        <li><a href="/wiki/Ido_Wikipedia" class="mw-redirect" title="Ido Wikipedia">Ido</a></li>
                                        <li><a href="/wiki/Low_Saxon_Wikipedia" class="mw-redirect" title="Low Saxon Wikipedia">Low Saxon</a></li>
                                        <li><a href="/wiki/Sicilian_Wikipedia" title="Sicilian Wikipedia">Sicilian</a></li>
                                        <li><a href="/wiki/Bishnupriya_Manipuri_Wikipedia" class="mw-redirect" title="Bishnupriya Manipuri Wikipedia">Bishnupriya Manipuri</a></li>
                                        <li><a href="/wiki/Bavarian_Wikipedia" class="mw-redirect" title="Bavarian Wikipedia">Bavarian</a></li>
                                        <li><a href="/wiki/Alemannic_Wikipedia" title="Alemannic Wikipedia">Alemannic</a></li>
                                        <li><a href="/wiki/Kurdish_(Kurmanji)_Wikipedia" class="mw-redirect" title="Kurdish (Kurmanji) Wikipedia">Kurdish (Kurmanji)</a></li>
                                        <li><a href="/wiki/Kannada_Wikipedia" title="Kannada Wikipedia">Kannada</a></li>
                                        <li><a href="/wiki/Interlingua_Wikipedia" class="mw-redirect" title="Interlingua Wikipedia">Interlingua</a></li>
                                        <li><a href="/wiki/Quechua_Wikipedia" class="mw-redirect" title="Quechua Wikipedia">Quechua</a></li>
                                        <li><a href="/wiki/Kurdish_(Sorani)_Wikipedia" class="mw-redirect" title="Kurdish (Sorani) Wikipedia">Kurdish (Sorani)</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">10,000+</th>
                            <td class="navbox-list navbox-odd hlist" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Mongolian_Wikipedia" title="Mongolian Wikipedia">Mongolian</a></li>
                                        <li><a href="/wiki/Egyptian_Arabic_Wikipedia" title="Egyptian Arabic Wikipedia">Egyptian Arabic</a></li>
                                        <li><a href="/wiki/Samogitian_Wikipedia" title="Samogitian Wikipedia">Samogitian</a></li>
                                        <li><a href="/wiki/Yiddish_Wikipedia" title="Yiddish Wikipedia">Yiddish</a></li>
                                        <li><a href="/wiki/List_of_Wikipedias" title="List of Wikipedias">Buginese</a></li>
                                        <li><a href="/wiki/Amharic_Wikipedia" class="mw-redirect" title="Amharic Wikipedia">Amharic</a></li>
                                        <li><a href="/wiki/List_of_Wikipedias" title="List of Wikipedias">Min Dong</a></li>
                                        <li><a href="/wiki/Odia_Wikipedia" title="Odia Wikipedia">Odia</a></li>
                                        <li><a href="/wiki/List_of_Wikipedias" title="List of Wikipedias">Banyumasan</a></li>
                                        <li><a href="/wiki/Faroese_Wikipedia" class="mw-redirect" title="Faroese Wikipedia">Faroese</a></li>
                                        <li><a href="/wiki/List_of_Wikipedias" title="List of Wikipedias">Mazandarani</a></li>
                                        <li><a href="/wiki/List_of_Wikipedias" title="List of Wikipedias">Upper Sorbian</a></li>
                                        <li><a href="/wiki/List_of_Wikipedias" title="List of Wikipedias">Maithili</a></li>
                                        <li><a href="/wiki/Mengrelian_Wikipedia" class="mw-redirect" title="Mengrelian Wikipedia">Mengrelian</a></li>
                                        <li><a href="/wiki/Sanskrit_Wikipedia" title="Sanskrit Wikipedia">Sanskrit</a></li>
                                        <li><a href="/wiki/Venetian_Wikipedia" class="mw-redirect" title="Venetian Wikipedia">Venetian</a></li>
                                        <li><a href="/wiki/Ossetian_Wikipedia" title="Ossetian Wikipedia">Ossetian</a></li>
                                        <li><a href="/wiki/Hill_Mari_Wikipedia" class="mw-redirect" title="Hill Mari Wikipedia">Hill Mari</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">1,000+</th>
                            <td class="navbox-list navbox-even hlist" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Fiji_Hindi_Wikipedia" class="mw-redirect" title="Fiji Hindi Wikipedia">Fiji Hindi</a></li>
                                        <li><a href="/wiki/Pashto_Wikipedia" title="Pashto Wikipedia">Pashto</a></li>
                                        <li><a href="/wiki/Sindhi_Wikipedia" title="Sindhi Wikipedia">Sindhi</a></li>
                                        <li><a href="/wiki/Northern_Sami_Wikipedia" title="Northern Sami Wikipedia">Northern Sami</a></li>
                                        <li><a href="/wiki/Dutch_Low_Saxon_Wikipedia" title="Dutch Low Saxon Wikipedia">Dutch Low Saxon</a></li>
                                        <li><a href="/wiki/Classical_Chinese_Wikipedia" class="mw-redirect" title="Classical Chinese Wikipedia">Classical Chinese</a></li>
                                        <li><a href="/wiki/Silesian_Wikipedia" title="Silesian Wikipedia">Silesian</a></li>
                                        <li><a href="/wiki/Crimean_Tatar_Wikipedia" title="Crimean Tatar Wikipedia">Crimean Tatar</a></li>
                                        <li><a href="/wiki/Assamese_Wikipedia" title="Assamese Wikipedia">Assamese</a></li>
                                        <li><a href="/wiki/Konkani_Wikipedia" title="Konkani Wikipedia">Konkani</a></li>
                                        <li><a href="/wiki/Uyghur_Wikipedia" title="Uyghur Wikipedia">Uyghur</a></li>
                                        <li><a href="/wiki/Guarani_Wikipedia" class="mw-redirect" title="Guarani Wikipedia">Guarani</a></li>
                                        <li><a href="/wiki/Maltese_Wikipedia" class="mw-redirect" title="Maltese Wikipedia">Maltese</a></li>
                                        <li><a href="/wiki/Extremaduran_Wikipedia" title="Extremaduran Wikipedia">Extremaduran</a></li>
                                        <li><a href="/wiki/Ripuarian_Wikipedia" title="Ripuarian Wikipedia">Ripuarian</a></li>
                                        <li><a href="/wiki/Aramaic_Wikipedia" class="mw-redirect" title="Aramaic Wikipedia">Aramaic</a></li>
                                        <li><a href="/wiki/Wolof_Wikipedia" title="Wolof Wikipedia">Wolof</a></li>
                                        <li><a href="/wiki/List_of_Wikipedias" title="List of Wikipedias">Kabiye</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <th scope="row" class="navbox-group" style="width:1%">100+</th>
                            <td class="navbox-list navbox-odd hlist" style="text-align:left;border-left-width:2px;border-left-style:solid;width:100%;padding:0px">
                                <div style="padding:0em 0.25em">
                                    <ul>
                                        <li><a href="/wiki/Tulu_Wikipedia" title="Tulu Wikipedia">Tulu</a></li>
                                        <li><a href="/wiki/Zulu_Wikipedia" title="Zulu Wikipedia">Zulu</a></li>
                                        <li><a href="/wiki/Xhosa_Wikipedia" title="Xhosa Wikipedia">Xhosa</a></li>
                                        <li><a href="/wiki/Bambara_Wikipedia" title="Bambara Wikipedia">Bambara</a></li>
                                        <li><a href="/wiki/Venda_Wikipedia" class="mw-redirect" title="Venda Wikipedia">Venda</a></li>
                                        <li><a href="/wiki/Cree_Wikipedia" class="mw-redirect" title="Cree Wikipedia">Cree</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        </tbody></table>
                </div>


                <!--
                NewPP limit report
                Parsed by mw1227
                Cached time: 20180211150326
                Cache expiry: 3600
                Dynamic content: true
                CPU time usage: 2.216 seconds
                Real time usage: 2.622 seconds
                Preprocessor visited node count: 18886/1000000
                Preprocessor generated node count: 0/1500000
                Post‐expand include size: 291126/2097152 bytes
                Template argument size: 28177/2097152 bytes
                Highest expansion depth: 21/40
                Expensive parser function count: 13/500
                Lua time usage: 0.803/10.000 seconds
                Lua memory usage: 7.13 MB/50 MB
                -->
                <!--
                Transclusion expansion time report (%,ms,calls,template)
                100.00% 2279.752      1 -total
                 35.54%  810.130      1 Template:Reflist
                 17.69%  403.371      1 User:WP_1.0_bot/Tables/OverallArticles
                 13.98%  318.751      1 User:WP_1.0_bot/WikiWork
                 13.85%  315.802      1 User:WP_1.0_bot/WikiWork/ta
                 13.71%  312.452      1 User:WP_1.0_bot/WikiWork/ta/pri
                 13.60%  309.952      1 User:WP_1.0_bot/WikiWork/ww
                 12.10%  275.925     32 Template:Cite_web
                  9.34%  213.028     19 Template:Cite_news
                  7.79%  177.597      1 Template:Infobox_website
                -->
            </div>
            <!-- Saved in parser cache with key enwiki:pcache:idhash:328159-0!canonical and timestamp 20180211150324 and revision id 824238132
             -->
            <noscript>&lt;img src="//en.wikipedia.org/wiki/Special:CentralAutoLogin/start?type=1x1" alt="" title="" width="1" height="1" style="border: none; position: absolute;" /&gt;</noscript></div>					<div class="printfooter">
            Retrieved from "<a dir="ltr" href="https://en.wikipedia.org/w/index.php?title=English_Wikipedia&amp;oldid=824238132">https://en.wikipedia.org/w/index.php?title=English_Wikipedia&amp;oldid=824238132</a>"					</div>
        <div id="catlinks" class="catlinks" data-mw="interface"><div id="mw-normal-catlinks" class="mw-normal-catlinks"><a href="/wiki/Help:Category" title="Help:Category">Categories</a>: <ul><li><a href="/wiki/Category:2001_establishments_in_the_United_States" title="Category:2001 establishments in the United States">2001 establishments in the United States</a></li><li><a href="/wiki/Category:English-language_encyclopedias" title="Category:English-language encyclopedias">English-language encyclopedias</a></li><li><a href="/wiki/Category:English-language_websites" title="Category:English-language websites">English-language websites</a></li><li><a href="/wiki/Category:Global_culture" title="Category:Global culture">Global culture</a></li><li><a href="/wiki/Category:Internet_properties_established_in_2001" title="Category:Internet properties established in 2001">Internet properties established in 2001</a></li><li><a href="/wiki/Category:Wikipedia" title="Category:Wikipedia">Wikipedia</a></li><li><a href="/wiki/Category:Wikipedias_by_language" title="Category:Wikipedias by language">Wikipedias by language</a></li></ul></div><div id="mw-hidden-catlinks" class="mw-hidden-catlinks mw-hidden-cats-hidden">Hidden categories: <ul><li><a href="/wiki/Category:All_articles_with_unsourced_statements" title="Category:All articles with unsourced statements">All articles with unsourced statements</a></li><li><a href="/wiki/Category:Articles_with_unsourced_statements_from_February_2015" title="Category:Articles with unsourced statements from February 2015">Articles with unsourced statements from February 2015</a></li><li><a href="/wiki/Category:CS1_German-language_sources_(de)" title="Category:CS1 German-language sources (de)">CS1 German-language sources (de)</a></li><li><a href="/wiki/Category:CS1_maint:_BOT:_original-url_status_unknown" title="Category:CS1 maint: BOT: original-url status unknown">CS1 maint: BOT: original-url status unknown</a></li><li><a href="/wiki/Category:CS1_Italian-language_sources_(it)" title="Category:CS1 Italian-language sources (it)">CS1 Italian-language sources (it)</a></li><li><a href="/wiki/Category:CS1_Polish-language_sources_(pl)" title="Category:CS1 Polish-language sources (pl)">CS1 Polish-language sources (pl)</a></li><li><a href="/wiki/Category:CS1_Russian-language_sources_(ru)" title="Category:CS1 Russian-language sources (ru)">CS1 Russian-language sources (ru)</a></li><li><a href="/wiki/Category:Pages_containing_links_to_subscription-only_content" title="Category:Pages containing links to subscription-only content">Pages containing links to subscription-only content</a></li><li><a href="/wiki/Category:Wikipedia_indefinitely_move-protected_pages" title="Category:Wikipedia indefinitely move-protected pages">Wikipedia indefinitely move-protected pages</a></li><li><a href="/wiki/Category:Wikipedia_pages_semi-protected_against_vandalism" title="Category:Wikipedia pages semi-protected against vandalism">Wikipedia pages semi-protected against vandalism</a></li><li><a href="/wiki/Category:Use_dmy_dates_from_July_2016" title="Category:Use dmy dates from July 2016">Use dmy dates from July 2016</a></li><li><a href="/wiki/Category:Pages_using_deprecated_image_syntax" title="Category:Pages using deprecated image syntax">Pages using deprecated image syntax</a></li><li><a href="/wiki/Category:Articles_containing_potentially_dated_statements_from_November_2017" title="Category:Articles containing potentially dated statements from November 2017">Articles containing potentially dated statements from November 2017</a></li><li><a href="/wiki/Category:All_articles_containing_potentially_dated_statements" title="Category:All articles containing potentially dated statements">All articles containing potentially dated statements</a></li><li><a href="/wiki/Category:Articles_with_unsourced_statements_from_September_2014" title="Category:Articles with unsourced statements from September 2014">Articles with unsourced statements from September 2014</a></li><li><a href="/wiki/Category:Articles_with_unsourced_statements_from_May_2012" title="Category:Articles with unsourced statements from May 2012">Articles with unsourced statements from May 2012</a></li><li><a href="/wiki/Category:All_articles_with_failed_verification" title="Category:All articles with failed verification">All articles with failed verification</a></li><li><a href="/wiki/Category:Articles_with_failed_verification_from_September_2014" title="Category:Articles with failed verification from September 2014">Articles with failed verification from September 2014</a></li><li><a href="/wiki/Category:Interlanguage_link_template_link_number" title="Category:Interlanguage link template link number">Interlanguage link template link number</a></li><li><a href="/wiki/Category:Wikipedia_articles_needing_clarification_from_March_2017" title="Category:Wikipedia articles needing clarification from March 2017">Wikipedia articles needing clarification from March 2017</a></li><li><a href="/wiki/Category:Wikipedia_articles_needing_clarification_from_February_2015" title="Category:Wikipedia articles needing clarification from February 2015">Wikipedia articles needing clarification from February 2015</a></li><li><a href="/wiki/Category:Articles_containing_potentially_dated_statements_from_January_2017" title="Category:Articles containing potentially dated statements from January 2017">Articles containing potentially dated statements from January 2017</a></li><li><a href="/wiki/Category:Articles_containing_video_clips" title="Category:Articles containing video clips">Articles containing video clips</a></li></ul></div></div>				<div class="visualClear"></div>
    </div>
    <aside class="notifications" hidden>
        noti in the fica tions will be here
    </aside>
</main>

<footer>Copyright (c) cvatlas 1998-<?php echo date("Y"); ?></footer>
</body>
</html>