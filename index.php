

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>
	LiamSymonds / Contact Form / source – Bitbucket
</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="" />
  <meta name="keywords" content="LiamSymonds,A,really,simple,contact,form,that,has,a,nice,bit,of,styling,to,it,and,is,free,for,you,to,use.,You,don&#39;t,have,to,keep,me,credited,but,it,would,be,nice,if,you,did.,source,sourcecode,contact.php@2f4ea68e6c39" />
  <!--[if lt IE 9]>
  <script src="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/js/lib/html5.js"></script>
  <![endif]-->

  <script type="text/javascript">
    var MEDIA_URL = "https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/";
    (function (window) {
      // prevent stray occurrences of `console.log` from causing errors in IE
      var console = window.console || (window.console = {});
      console.log || (console.log = function () {});

      window.BB || (window.BB = {});
      window.BB.debug = false;
      window.BB.cname = false;
      window.BB.CANON_URL = 'https://bitbucket.org';
      window.BB.user || (window.BB.user = {});
      window.BB.user.has = (function () {
        var betaFeatures = [];
        
        return function (feature) {
          return _.contains(betaFeatures, feature);
        };
      }());
      window.BB.repo || (window.BB.repo = {});
  
  
    
    
      window.BB.repo.slug = 'contact\u002Dform';
    
    
      window.BB.repo.owner = {
        username: 'LiamSymonds'
      };
    
  
    }(this));
  </script>


  
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/reset.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/defaults.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/layout.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/forms.css" />

  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/components.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/svn-import.css" />

  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/admin.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/changesets.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/dashboard.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/descendants.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/explore.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/issues.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/messages.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/profile.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/promo.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/signup.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/wiki.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/zealots.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/jqueryui/jquery-ui-1.8.7.custom.css" />

  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/jqueryui/jquery.ui.progressbar.css" />

  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/screen.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/fancybox.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/plans.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/markitup/skins/simple/style.css" />
  <link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/print.css" media="print" />



  <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="Bitbucket" />
  <link rel="icon" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/img/logo_new.png" type="image/png" />

  <!--[if IE]>
  <script src="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/js/lib/excanvas.js"></script>
  <![endif]-->


  <script src="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/js/lib/bundle.js"></script>



	<link rel="stylesheet" href="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/css/highlight/trac.css" type="text/css" />


</head>

<body class="">

  <div id="wrapper">



  <div id="header-wrap">
    <div id="header">
    <ul id="global-nav">
      <li><a class="home" href="http://www.atlassian.com">Atlassian Home</a></li>
      <li><a class="docs" href="http://confluence.atlassian.com/display/BITBUCKET">Documentation</a></li>
      <li><a class="support" href="/support">Support</a></li>
      <li><a class="blog" href="http://blog.bitbucket.org">Blog</a></li>
      <li><a class="forums" href="http://groups.google.com/group/bitbucket-users">Forums</a></li>
    </ul>
    <a href="/" id="logo">Bitbucket by Atlassian</a>

    <div id="main-nav" class="clearfix">
    
      <ul class="clearfix">
        <li><a href="/plans">Pricing &amp; Signup</a></li>
        <li><a href="/repo/month">Explore Bitbucket</a></li>
        <li><a href="/account/signin/">Log in</a></li>
        

<li class="search-box">
  <form action="/repo/all">
    <input type="text" name="name" id="search" placeholder="Find a project" />
  </form>
</li>

      </ul>
    
    </div>
    </div>
  </div>

    <div id="header-messages">
  
  
    
    
    
    
  

    
   </div>



    <div id="content">
      <div id="unnamed">
      
	
  





  <script type="text/javascript">
    jQuery(function ($) {
        var cookie = $.cookie,
            cookieOptions, date,
            $content = $('#content'),
            $pane = $('#what-is-bitbucket'),
            $hide = $pane.find('[href="#hide"]').css('display', 'block').hide();

        date = new Date();
        date.setTime(date.getTime() + 365 * 24 * 60 * 60 * 1000);
        cookieOptions = { path: '/', expires: date };

        if (cookie('toggle_status') == 'hide') $content.addClass('repo-desc-hidden');

        $('#toggle-repo-content').click(function (event) {
            event.preventDefault();
            $content.toggleClass('repo-desc-hidden');
            cookie('toggle_status', cookie('toggle_status') == 'show' ? 'hide' : 'show', cookieOptions);
        });

        if (!cookie('hide_intro_message')) $pane.show();

        $hide.click(function (event) {
            event.preventDefault();
            cookie('hide_intro_message', true, cookieOptions);
            $pane.slideUp('slow');
        });

        $pane.hover(
            function () { $hide.fadeIn('fast'); },
            function () { $hide.fadeOut('fast'); });
    });
  </script>



  
  
  
  
  
    <div id="what-is-bitbucket" class="new-to-bitbucket">
      <h2>Liam Symonds <span id="slogan">is sharing code with you</span></h2>
      <img src="https://secure.gravatar.com/avatar/d00d197adbe9755b3a3a3131317e25a9?d=identicon&s=32" alt="" class="avatar" />
      <p>Bitbucket is a code hosting site. Unlimited public and private repositories. Free for small teams.</p>
      <div class="primary-action-link signup"><a href="/account/signup/?utm_source=internal&utm_medium=banner&utm_campaign=what_is_bitbucket">Try Bitbucket free</a></div>
      <a href="#hide" title="Don't show this again">Don't show this again</a>
    </div>
  


<div id="tabs">
  <ul class="tabs">
    <li>
      <a href="/LiamSymonds/contact-form/overview">Overview</a>
    </li>

    <li>
      <a href="/LiamSymonds/contact-form/downloads">Downloads (0)</a>
    </li>

    

    

    <li class="selected">
      
        <a href="/LiamSymonds/contact-form/src/2f4ea68e6c39">Source</a>
      
    </li>

    <li>
      <a href="/LiamSymonds/contact-form/changesets">Changesets</a>
    </li>

    

    

    

    <li class="secondary">
      <a href="/LiamSymonds/contact-form/descendants">Forks/Queues (0)</a>
    </li>

    <li class="secondary">
      <a href="/LiamSymonds/contact-form/zealots">Followers (<span id="followers-count">1</span>)</a>
    </li>
  </ul>
</div>


  <div class="repo-menu" id="repo-menu">
    <ul id="repo-menu-links">
     
      <li>
        <a href="/LiamSymonds/contact-form/rss" class="rss" title="RSS feed for Contact Form">RSS</a>
      </li>
      
        <li>
          <a href="/LiamSymonds/contact-form/pull" class="pull-request">
            pull request
          </a>
        </li>
      
      <li><a href="/LiamSymonds/contact-form/fork" class="fork">fork</a></li>
      
        <li><a href="/LiamSymonds/contact-form/hack" class="patch-queue">patch queue</a></li>
      
      <li>
        <a rel="nofollow" href="/LiamSymonds/contact-form/follow" class="follow">follow</a>
      </li>
      
          
      
      
        <li>
          <a class="source">get source</a>
          <ul class="downloads">
            
              <li><a rel="nofollow" href="/LiamSymonds/contact-form/get/2f4ea68e6c39.zip">zip</a></li>
              <li><a rel="nofollow" href="/LiamSymonds/contact-form/get/2f4ea68e6c39.tar.gz">gz</a></li>
              <li><a rel="nofollow" href="/LiamSymonds/contact-form/get/2f4ea68e6c39.tar.bz2">bz2</a></li>
            
          </ul>
        </li>
      
    </ul>

  
    <ul class="metadata">
    
      <li class="branches">branches
        <ul>
          <li>
            <a href="/LiamSymonds/contact-form/src/2f4ea68e6c39">default</a>
          
          </li>
        </ul>
      </li>
    
      <li class="tags">tags
        <ul>
          <li><a href="/LiamSymonds/contact-form/src/2f4ea68e6c39">tip</a>
            </li>
        </ul>
      </li>
    </ul>
  
</div>
<div class="repo-menu" id="repo-desc">
  

    <ul id="repo-menu-links-mini">
      
      <li>
        <a href="/LiamSymonds/contact-form/rss" class="rss" title="RSS feed for Contact Form"></a>
      </li>
      
        <li>
          <a href="/LiamSymonds/contact-form/pull" class="pull-request" title="Pull request"></a>
        </li>
      
      <li><a href="/LiamSymonds/contact-form/fork" class="fork" title="Fork"></a></li>
      
        <li><a href="/LiamSymonds/contact-form/hack" class="patch-queue" title="Patch queue"></a></li>
      
      <li>
        <a rel="nofollow" href="/LiamSymonds/contact-form/follow" class="follow">follow</a>
      </li>
      
          
      
      
        <li>
          <a class="source" title="Get source"></a>
          <ul class="downloads">
            
              <li><a rel="nofollow" href="/LiamSymonds/contact-form/get/2f4ea68e6c39.zip">zip</a></li>
              <li><a rel="nofollow" href="/LiamSymonds/contact-form/get/2f4ea68e6c39.tar.gz">gz</a></li>
              <li><a rel="nofollow" href="/LiamSymonds/contact-form/get/2f4ea68e6c39.tar.bz2">bz2</a></li>
            
          </ul>
        </li>
      
    </ul>

    <h3 id="repo-heading">
      <a href="/LiamSymonds">LiamSymonds</a> /
      <a href="/LiamSymonds/contact-form/src">Contact Form</a>
    
    </h3>


  <p class="repo-desc-description">A really simple contact form that has a nice bit of styling to it and is free for you to use.

You don&#39;t have to keep me credited but it would be nice if you did.</p>


  <div id="repo-desc-cloneinfo">Clone this repository (size: 4.2 KB): <a href="https://bitbucket.org/LiamSymonds/contact-form" onclick="$('#clone-url-ssh').hide();$('#clone-url-https').toggle();return(false);"><small>HTTPS</small></a> / <a href="ssh://hg@bitbucket.org/LiamSymonds/contact-form" onclick="$('#clone-url-https').hide();$('#clone-url-ssh').toggle();return(false);"><small>SSH</small></a><br />
    <pre id="clone-url-https">hg clone <a href="https://bitbucket.org/LiamSymonds/contact-form">https://bitbucket.org/LiamSymonds/contact-form</a></pre>

    <pre id="clone-url-ssh" style="display:none;">hg clone <a href="ssh://hg@bitbucket.org/LiamSymonds/contact-form">ssh://hg@bitbucket.org/LiamSymonds/contact-form</a></pre></div>

  <a href="#" id="toggle-repo-content"></a>

  

</div>




      

<div id="source-path" class="layout-box">
	<a href="/LiamSymonds/contact-form/src">Contact Form</a> /
	
		
			
				contact.php
			
		
		
	
</div>


<div id="source-view">
	<table class="info-table">
		<tr>
			<th>r1:2f4ea68e6c39</th>
			<th>167 loc</th>
			<th>3.5 KB</th>
			<th class="source-view-links">
				<a id="embed-link" href="#" onclick="makeEmbed('#embed-link', 'https://bitbucket.org/LiamSymonds/contact-form/src/2f4ea68e6c39/contact.php?embed=t');">embed</a> /
				<a href="/LiamSymonds/contact-form/history/contact.php">history</a> /
				<a href="/LiamSymonds/contact-form/annotate/2f4ea68e6c39/contact.php">annotate</a> /
				<a href="/LiamSymonds/contact-form/raw/2f4ea68e6c39/contact.php">raw</a> /
				<form action="/LiamSymonds/contact-form/diff/contact.php" class="source-view-form">
					
					<input type="hidden" name="diff2" value="2f4ea68e6c39" />
						<select name="diff1" class="smaller">
							
								
							
								
									<option value="719ea41e976a">
										r0:719ea41e976a
									</option>
								
							
						</select>
						<input type="submit" value="diff" class="smaller" />
					
				</form>
			</th>
		</tr>
	</table>
	
		<div class="scroll-x">
		
			<table class="highlighttable"><tr><td class="linenos"><div class="linenodiv"><pre><a href="#cl-1">  1</a>
<a href="#cl-2">  2</a>
<a href="#cl-3">  3</a>
<a href="#cl-4">  4</a>
<a href="#cl-5">  5</a>
<a href="#cl-6">  6</a>
<a href="#cl-7">  7</a>
<a href="#cl-8">  8</a>
<a href="#cl-9">  9</a>
<a href="#cl-10"> 10</a>
<a href="#cl-11"> 11</a>
<a href="#cl-12"> 12</a>
<a href="#cl-13"> 13</a>
<a href="#cl-14"> 14</a>
<a href="#cl-15"> 15</a>
<a href="#cl-16"> 16</a>
<a href="#cl-17"> 17</a>
<a href="#cl-18"> 18</a>
<a href="#cl-19"> 19</a>
<a href="#cl-20"> 20</a>
<a href="#cl-21"> 21</a>
<a href="#cl-22"> 22</a>
<a href="#cl-23"> 23</a>
<a href="#cl-24"> 24</a>
<a href="#cl-25"> 25</a>
<a href="#cl-26"> 26</a>
<a href="#cl-27"> 27</a>
<a href="#cl-28"> 28</a>
<a href="#cl-29"> 29</a>
<a href="#cl-30"> 30</a>
<a href="#cl-31"> 31</a>
<a href="#cl-32"> 32</a>
<a href="#cl-33"> 33</a>
<a href="#cl-34"> 34</a>
<a href="#cl-35"> 35</a>
<a href="#cl-36"> 36</a>
<a href="#cl-37"> 37</a>
<a href="#cl-38"> 38</a>
<a href="#cl-39"> 39</a>
<a href="#cl-40"> 40</a>
<a href="#cl-41"> 41</a>
<a href="#cl-42"> 42</a>
<a href="#cl-43"> 43</a>
<a href="#cl-44"> 44</a>
<a href="#cl-45"> 45</a>
<a href="#cl-46"> 46</a>
<a href="#cl-47"> 47</a>
<a href="#cl-48"> 48</a>
<a href="#cl-49"> 49</a>
<a href="#cl-50"> 50</a>
<a href="#cl-51"> 51</a>
<a href="#cl-52"> 52</a>
<a href="#cl-53"> 53</a>
<a href="#cl-54"> 54</a>
<a href="#cl-55"> 55</a>
<a href="#cl-56"> 56</a>
<a href="#cl-57"> 57</a>
<a href="#cl-58"> 58</a>
<a href="#cl-59"> 59</a>
<a href="#cl-60"> 60</a>
<a href="#cl-61"> 61</a>
<a href="#cl-62"> 62</a>
<a href="#cl-63"> 63</a>
<a href="#cl-64"> 64</a>
<a href="#cl-65"> 65</a>
<a href="#cl-66"> 66</a>
<a href="#cl-67"> 67</a>
<a href="#cl-68"> 68</a>
<a href="#cl-69"> 69</a>
<a href="#cl-70"> 70</a>
<a href="#cl-71"> 71</a>
<a href="#cl-72"> 72</a>
<a href="#cl-73"> 73</a>
<a href="#cl-74"> 74</a>
<a href="#cl-75"> 75</a>
<a href="#cl-76"> 76</a>
<a href="#cl-77"> 77</a>
<a href="#cl-78"> 78</a>
<a href="#cl-79"> 79</a>
<a href="#cl-80"> 80</a>
<a href="#cl-81"> 81</a>
<a href="#cl-82"> 82</a>
<a href="#cl-83"> 83</a>
<a href="#cl-84"> 84</a>
<a href="#cl-85"> 85</a>
<a href="#cl-86"> 86</a>
<a href="#cl-87"> 87</a>
<a href="#cl-88"> 88</a>
<a href="#cl-89"> 89</a>
<a href="#cl-90"> 90</a>
<a href="#cl-91"> 91</a>
<a href="#cl-92"> 92</a>
<a href="#cl-93"> 93</a>
<a href="#cl-94"> 94</a>
<a href="#cl-95"> 95</a>
<a href="#cl-96"> 96</a>
<a href="#cl-97"> 97</a>
<a href="#cl-98"> 98</a>
<a href="#cl-99"> 99</a>
<a href="#cl-100">100</a>
<a href="#cl-101">101</a>
<a href="#cl-102">102</a>
<a href="#cl-103">103</a>
<a href="#cl-104">104</a>
<a href="#cl-105">105</a>
<a href="#cl-106">106</a>
<a href="#cl-107">107</a>
<a href="#cl-108">108</a>
<a href="#cl-109">109</a>
<a href="#cl-110">110</a>
<a href="#cl-111">111</a>
<a href="#cl-112">112</a>
<a href="#cl-113">113</a>
<a href="#cl-114">114</a>
<a href="#cl-115">115</a>
<a href="#cl-116">116</a>
<a href="#cl-117">117</a>
<a href="#cl-118">118</a>
<a href="#cl-119">119</a>
<a href="#cl-120">120</a>
<a href="#cl-121">121</a>
<a href="#cl-122">122</a>
<a href="#cl-123">123</a>
<a href="#cl-124">124</a>
<a href="#cl-125">125</a>
<a href="#cl-126">126</a>
<a href="#cl-127">127</a>
<a href="#cl-128">128</a>
<a href="#cl-129">129</a>
<a href="#cl-130">130</a>
<a href="#cl-131">131</a>
<a href="#cl-132">132</a>
<a href="#cl-133">133</a>
<a href="#cl-134">134</a>
<a href="#cl-135">135</a>
<a href="#cl-136">136</a>
<a href="#cl-137">137</a>
<a href="#cl-138">138</a>
<a href="#cl-139">139</a>
<a href="#cl-140">140</a>
<a href="#cl-141">141</a>
<a href="#cl-142">142</a>
<a href="#cl-143">143</a>
<a href="#cl-144">144</a>
<a href="#cl-145">145</a>
<a href="#cl-146">146</a>
<a href="#cl-147">147</a>
<a href="#cl-148">148</a>
<a href="#cl-149">149</a>
<a href="#cl-150">150</a>
<a href="#cl-151">151</a>
<a href="#cl-152">152</a>
<a href="#cl-153">153</a>
<a href="#cl-154">154</a>
<a href="#cl-155">155</a>
<a href="#cl-156">156</a>
<a href="#cl-157">157</a>
<a href="#cl-158">158</a>
<a href="#cl-159">159</a>
<a href="#cl-160">160</a>
<a href="#cl-161">161</a>
<a href="#cl-162">162</a>
<a href="#cl-163">163</a>
<a href="#cl-164">164</a>
<a href="#cl-165">165</a>
<a href="#cl-166">166</a>
<a href="#cl-167">167</a>
</pre></div></td><td class="code"><div class="highlight"><pre><a name="cl-1"></a><span class="cp">&lt;?php</span>
<a name="cl-2"></a>        
<a name="cl-3"></a>        <span class="cm">/*</span>
<a name="cl-4"></a><span class="cm">        *       Contact form made by Liamonicles</span>
<a name="cl-5"></a><span class="cm">        */</span> 
<a name="cl-6"></a>        
<a name="cl-7"></a>        <span class="nb">define</span><span class="p">(</span> <span class="s2">&quot;MY_EMAIL&quot;</span><span class="p">,</span> <span class="s2">&quot;&quot;</span> <span class="p">);</span> <span class="c1">// define your email address</span>
<a name="cl-8"></a>
<a name="cl-9"></a><span class="cp">?&gt;</span>
<a name="cl-10"></a><span class="cp">&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Transitional//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&quot;&gt;</span>
<a name="cl-11"></a><span class="nt">&lt;html</span> <span class="na">xmlns=</span><span class="s">&quot;http://www.w3.org/1999/xhtml&quot;</span><span class="nt">&gt;</span>
<a name="cl-12"></a><span class="nt">&lt;head&gt;</span>
<a name="cl-13"></a>        <span class="nt">&lt;meta</span> <span class="na">http-equiv=</span><span class="s">&quot;Content-Type&quot;</span> <span class="na">content=</span><span class="s">&quot;text/html; charset=utf-8&quot;</span> <span class="nt">/&gt;</span>
<a name="cl-14"></a>        <span class="nt">&lt;title&gt;&lt;/title&gt;</span>
<a name="cl-15"></a>        <span class="nt">&lt;style </span><span class="na">type=</span><span class="s">&quot;text/css&quot;</span> <span class="na">media=</span><span class="s">&quot;screen&quot;</span><span class="nt">&gt;</span>
<a name="cl-16"></a>                
<a name="cl-17"></a>                <span class="nt">body</span> <span class="p">{</span>
<a name="cl-18"></a>                        
<a name="cl-19"></a>                        <span class="k">font-family</span><span class="o">:</span> <span class="n">Verdana</span><span class="p">;</span>
<a name="cl-20"></a>                        <span class="k">font-size</span><span class="o">:</span> <span class="k">x-small</span><span class="p">;</span>
<a name="cl-21"></a>                        <span class="k">color</span><span class="o">:</span> <span class="m">#000</span><span class="p">;</span>
<a name="cl-22"></a>                        <span class="k">background</span><span class="o">:</span> <span class="m">#8AC9EB</span><span class="p">;</span>
<a name="cl-23"></a>                        
<a name="cl-24"></a>                <span class="p">}</span>
<a name="cl-25"></a>                
<a name="cl-26"></a>                <span class="nf">#container</span> <span class="p">{</span>
<a name="cl-27"></a>                        
<a name="cl-28"></a>                        <span class="k">margin</span><span class="o">:</span> <span class="k">auto</span><span class="p">;</span>
<a name="cl-29"></a>                        <span class="k">border</span><span class="o">:</span> <span class="m">1px</span> <span class="k">solid</span> <span class="m">#589FC4</span><span class="p">;</span>
<a name="cl-30"></a>                        <span class="k">padding</span><span class="o">:</span> <span class="m">5px</span><span class="p">;</span>
<a name="cl-31"></a>                        <span class="o">-</span><span class="n">moz</span><span class="o">-</span><span class="k">border</span><span class="o">-</span><span class="n">radius</span><span class="o">:</span> <span class="m">5px</span><span class="p">;</span>
<a name="cl-32"></a>                        <span class="o">-</span><span class="n">webkit</span><span class="o">-</span><span class="k">border</span><span class="o">-</span><span class="n">radius</span><span class="o">:</span> <span class="m">5px</span><span class="p">;</span>
<a name="cl-33"></a>                        <span class="k">border</span><span class="o">-</span><span class="n">radius</span><span class="o">:</span> <span class="m">5px</span><span class="p">;</span>
<a name="cl-34"></a>                        <span class="k">width</span><span class="o">:</span> <span class="m">298px</span><span class="p">;</span>
<a name="cl-35"></a>                        <span class="k">background</span><span class="o">:</span> <span class="m">#F5F5F5</span><span class="p">;</span>
<a name="cl-36"></a>                        
<a name="cl-37"></a>                <span class="p">}</span>
<a name="cl-38"></a>                
<a name="cl-39"></a>                <span class="nt">h1</span> <span class="p">{</span>
<a name="cl-40"></a>                
<a name="cl-41"></a>                        <span class="k">font-size</span><span class="o">:</span> <span class="m">20px</span><span class="p">;</span>
<a name="cl-42"></a>                
<a name="cl-43"></a>                <span class="p">}</span>
<a name="cl-44"></a>                
<a name="cl-45"></a>                <span class="nt">input</span><span class="o">[</span><span class="nt">type</span><span class="o">=</span><span class="nt">text</span><span class="o">]</span> <span class="p">{</span>
<a name="cl-46"></a>                        
<a name="cl-47"></a>                        <span class="k">width</span><span class="o">:</span> <span class="m">250px</span><span class="p">;</span>
<a name="cl-48"></a>                        <span class="k">border</span><span class="o">:</span> <span class="m">1px</span> <span class="k">solid</span> <span class="m">#589FC4</span><span class="p">;</span>
<a name="cl-49"></a>                        
<a name="cl-50"></a>                <span class="p">}</span>
<a name="cl-51"></a>                
<a name="cl-52"></a>                <span class="nt">input</span><span class="o">[</span><span class="nt">type</span><span class="o">=</span><span class="nt">submit</span><span class="o">],</span> <span class="nt">textarea</span> <span class="p">{</span>
<a name="cl-53"></a>                        
<a name="cl-54"></a>                        <span class="k">border</span><span class="o">:</span> <span class="m">1px</span> <span class="k">solid</span> <span class="m">#589FC4</span><span class="p">;</span>
<a name="cl-55"></a>                        
<a name="cl-56"></a>                <span class="p">}</span>
<a name="cl-57"></a>                
<a name="cl-58"></a>        <span class="nt">&lt;/style&gt;</span>
<a name="cl-59"></a><span class="nt">&lt;/head&gt;</span>
<a name="cl-60"></a>
<a name="cl-61"></a><span class="nt">&lt;body&gt;</span>
<a name="cl-62"></a>
<a name="cl-63"></a>        <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">&quot;container&quot;</span><span class="nt">&gt;</span>
<a name="cl-64"></a>                
<a name="cl-65"></a>                <span class="nt">&lt;h1&gt;</span>Contact Me<span class="nt">&lt;/h1&gt;</span>
<a name="cl-66"></a>                
<a name="cl-67"></a>                <span class="nt">&lt;p&gt;</span>Below you can contact me by submitting the form. It is really simple, just fill out all of the fields and then click submit! I am to reply within 24 hours!<span class="nt">&lt;/p&gt;</span>
<a name="cl-68"></a>                
<a name="cl-69"></a>                
<a name="cl-70"></a>                        <span class="c">&lt;!-- CONTACT FORM MADE BY LIAMONICLES --&gt;</span>
<a name="cl-71"></a>                
<a name="cl-72"></a>                <span class="nt">&lt;form</span> <span class="na">method=</span><span class="s">&quot;post&quot;</span> <span class="na">action=</span><span class="s">&quot;&quot;</span><span class="nt">&gt;</span>
<a name="cl-73"></a>
<a name="cl-74"></a>                        <span class="cp">&lt;?php</span>
<a name="cl-75"></a>
<a name="cl-76"></a>                                <span class="k">if</span><span class="p">(</span> <span class="nb">isset</span><span class="p">(</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;submit&#39;</span><span class="p">]</span> <span class="p">)</span> <span class="p">)</span> <span class="c1">// if they have submitted the form</span>
<a name="cl-77"></a>                                <span class="p">{</span>
<a name="cl-78"></a>
<a name="cl-79"></a>                                        <span class="nv">$fieldError</span> <span class="o">=</span> <span class="s2">&quot;&quot;</span><span class="p">;</span>
<a name="cl-80"></a>
<a name="cl-81"></a>
<a name="cl-82"></a>                                        <span class="nv">$name</span> <span class="o">=</span> <span class="nb">htmlentities</span><span class="p">(</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">]</span> <span class="p">);</span> <span class="c1">// post their username</span>
<a name="cl-83"></a>                                        <span class="nv">$email</span> <span class="o">=</span> <span class="nb">htmlentities</span><span class="p">(</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;email&#39;</span><span class="p">]</span> <span class="p">);</span>  <span class="c1">// post their email address</span>
<a name="cl-84"></a>                                        <span class="nv">$subject</span> <span class="o">=</span> <span class="nb">htmlentities</span><span class="p">(</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;subject&#39;</span><span class="p">]</span> <span class="p">);</span> <span class="c1">// post the subject</span>
<a name="cl-85"></a>                                        <span class="nv">$message</span> <span class="o">=</span> <span class="nb">htmlentities</span><span class="p">(</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;message&#39;</span><span class="p">]</span> <span class="p">);</span> <span class="c1">// post the message</span>
<a name="cl-86"></a>
<a name="cl-87"></a>                                        <span class="k">if</span><span class="p">(</span> <span class="o">!</span><span class="nv">$name</span> <span class="p">)</span> <span class="c1">// if they haven&#39;t entered a name</span>
<a name="cl-88"></a>                                        <span class="p">{</span>
<a name="cl-89"></a>                                                <span class="nv">$fieldError</span> <span class="o">.=</span> <span class="s2">&quot;You must enter your name.&lt;br /&gt;&quot;</span><span class="p">;</span> <span class="c1">// add an error</span>
<a name="cl-90"></a>                                        <span class="p">}</span>
<a name="cl-91"></a>
<a name="cl-92"></a>                                        <span class="k">if</span><span class="p">(</span> <span class="o">!</span><span class="nv">$email</span> <span class="p">)</span>
<a name="cl-93"></a>                                        <span class="p">{</span>
<a name="cl-94"></a>                                                <span class="nv">$fieldError</span> <span class="o">.=</span> <span class="s2">&quot;You must fill in your email address.&lt;br /&gt;&quot;</span><span class="p">;</span> <span class="c1">// add an error</span>
<a name="cl-95"></a>                                        <span class="p">}</span>
<a name="cl-96"></a>
<a name="cl-97"></a>                                        <span class="k">if</span><span class="p">(</span> <span class="o">!</span><span class="nv">$subject</span> <span class="p">)</span>
<a name="cl-98"></a>                                        <span class="p">{</span>
<a name="cl-99"></a>                                                <span class="nv">$fieldError</span> <span class="o">.=</span> <span class="s2">&quot;You must enter a subject.&lt;br /&gt;&quot;</span><span class="p">;</span> <span class="c1">// add an error</span>
<a name="cl-100"></a>                                        <span class="p">}</span>
<a name="cl-101"></a>
<a name="cl-102"></a>                                        <span class="k">if</span><span class="p">(</span> <span class="o">!</span><span class="nv">$message</span> <span class="p">)</span>
<a name="cl-103"></a>                                        <span class="p">{</span>
<a name="cl-104"></a>                                                <span class="nv">$fieldError</span> <span class="o">.=</span> <span class="s2">&quot;You must enter a message.&lt;br /&gt;&quot;</span><span class="p">;</span> <span class="c1">// add an error</span>
<a name="cl-105"></a>                                        <span class="p">}</span>
<a name="cl-106"></a>
<a name="cl-107"></a>                                        <span class="k">if</span><span class="p">(</span> <span class="o">!</span><span class="nb">stristr</span><span class="p">(</span> <span class="nv">$email</span><span class="p">,</span> <span class="s2">&quot;@&quot;</span> <span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nb">stristr</span><span class="p">(</span> <span class="nv">$email</span><span class="p">,</span> <span class="s2">&quot;.&quot;</span> <span class="p">)</span> <span class="p">)</span> <span class="c1">// if it is an invalid email</span>
<a name="cl-108"></a>                                        <span class="p">{</span>
<a name="cl-109"></a>                                                <span class="nv">$fieldError</span> <span class="o">.=</span> <span class="s2">&quot;You must enter a valid email address.&lt;br /&gt;&quot;</span><span class="p">;</span>
<a name="cl-110"></a>                                        <span class="p">}</span>
<a name="cl-111"></a>
<a name="cl-112"></a>                                        <span class="k">if</span><span class="p">(</span> <span class="nv">$fieldError</span> <span class="p">)</span><span class="c1">// if there are field errors</span>
<a name="cl-113"></a>                                        <span class="p">{</span>
<a name="cl-114"></a>                                                <span class="k">echo</span> <span class="s2">&quot;&lt;span style=</span><span class="se">\&quot;</span><span class="s2">color: #BD2D3C;</span><span class="se">\&quot;</span><span class="s2">&gt;&lt;strong&gt;Error&lt;/strong&gt;&lt;/span&gt;&quot;</span><span class="p">;</span>
<a name="cl-115"></a>                                                <span class="k">echo</span> <span class="s2">&quot;&lt;br /&gt;&quot;</span><span class="p">;</span>
<a name="cl-116"></a>                                                <span class="k">echo</span> <span class="nv">$fieldError</span><span class="p">;</span>
<a name="cl-117"></a>                                                <span class="k">echo</span> <span class="s2">&quot;&lt;br /&gt;&quot;</span><span class="p">;</span>
<a name="cl-118"></a>                                        <span class="p">}</span>
<a name="cl-119"></a>
<a name="cl-120"></a>                                        <span class="k">if</span><span class="p">(</span> <span class="o">!</span><span class="nv">$fieldError</span> <span class="p">)</span>
<a name="cl-121"></a>                                        <span class="p">{</span>
<a name="cl-122"></a>                                                <span class="nv">$contact</span> <span class="o">=</span> <span class="s2">&quot;##################### You&#39;ve been contacted! #####################</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span>
<a name="cl-123"></a>                                                <span class="nv">$contact</span> <span class="o">.=</span> <span class="s2">&quot;Name: </span><span class="si">{</span><span class="nv">$name</span><span class="si">}</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span>
<a name="cl-124"></a>                                                <span class="nv">$contact</span> <span class="o">.=</span> <span class="s2">&quot;Email: </span><span class="si">{</span><span class="nv">$email</span><span class="si">}</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span>
<a name="cl-125"></a>                                                <span class="nv">$contact</span> <span class="o">.=</span> <span class="s2">&quot;Subject: </span><span class="si">{</span><span class="nv">$subject</span><span class="si">}</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span>
<a name="cl-126"></a>                                                <span class="nv">$contact</span> <span class="o">.=</span> <span class="s2">&quot;Message: </span><span class="si">{</span><span class="nv">$message</span><span class="si">}</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span>
<a name="cl-127"></a>                                                <span class="nv">$contact</span> <span class="o">.=</span> <span class="s2">&quot;IP: </span><span class="si">{</span><span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;REMOTE_ADDR&#39;</span><span class="p">]</span><span class="si">}</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span>
<a name="cl-128"></a>                                                <span class="nv">$from</span> <span class="o">=</span> <span class="s2">&quot;From: </span><span class="si">{</span><span class="nv">$email</span><span class="si">}</span><span class="s2">&quot;</span><span class="p">;</span>
<a name="cl-129"></a>                                                <span class="nb">mail</span><span class="p">(</span> <span class="nx">MY_EMAIL</span><span class="p">,</span> <span class="nv">$subject</span><span class="p">,</span> <span class="nv">$contact</span><span class="p">,</span> <span class="nv">$from</span> <span class="p">);</span> <span class="c1">// mail them</span>
<a name="cl-130"></a>                                        <span class="p">}</span>
<a name="cl-131"></a>
<a name="cl-132"></a>
<a name="cl-133"></a>
<a name="cl-134"></a>
<a name="cl-135"></a>                                <span class="p">}</span>
<a name="cl-136"></a>
<a name="cl-137"></a>                        <span class="cp">?&gt;</span>                      
<a name="cl-138"></a>
<a name="cl-139"></a>                        Name: <span class="nt">&lt;br</span> <span class="nt">/&gt;</span>
<a name="cl-140"></a>                        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;name&quot;</span> <span class="na">value=</span><span class="s">&quot;&quot;</span> <span class="nt">/&gt;</span>
<a name="cl-141"></a>
<a name="cl-142"></a>                        <span class="nt">&lt;br</span> <span class="nt">/&gt;&lt;br</span> <span class="nt">/&gt;</span>
<a name="cl-143"></a>
<a name="cl-144"></a>                        Email: <span class="nt">&lt;br</span> <span class="nt">/&gt;</span>
<a name="cl-145"></a>                        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;email&quot;</span> <span class="na">value=</span><span class="s">&quot;&quot;</span> <span class="nt">/&gt;</span>
<a name="cl-146"></a>
<a name="cl-147"></a>                        <span class="nt">&lt;br</span> <span class="nt">/&gt;&lt;br</span> <span class="nt">/&gt;</span>
<a name="cl-148"></a>
<a name="cl-149"></a>                        Subject: <span class="nt">&lt;br</span> <span class="nt">/&gt;</span>
<a name="cl-150"></a>                        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;subject&quot;</span> <span class="na">value=</span><span class="s">&quot;&quot;</span> <span class="nt">/&gt;</span>
<a name="cl-151"></a>
<a name="cl-152"></a>                        <span class="nt">&lt;br</span> <span class="nt">/&gt;&lt;br</span> <span class="nt">/&gt;</span>
<a name="cl-153"></a>
<a name="cl-154"></a>                        Message: <span class="nt">&lt;br</span> <span class="nt">/&gt;</span>
<a name="cl-155"></a>                        <span class="nt">&lt;textarea</span> <span class="na">name=</span><span class="s">&quot;message&quot;</span> <span class="na">cols=</span><span class="s">&quot;28&quot;</span> <span class="na">rows=</span><span class="s">&quot;5&quot;</span><span class="nt">&gt;&lt;/textarea&gt;</span>
<a name="cl-156"></a>
<a name="cl-157"></a>                        <span class="nt">&lt;br</span> <span class="nt">/&gt;&lt;br</span> <span class="nt">/&gt;</span>
<a name="cl-158"></a>
<a name="cl-159"></a>                        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;submit&quot;</span> <span class="na">value=</span><span class="s">&quot;Contact Me&quot;</span> <span class="na">name=</span><span class="s">&quot;submit&quot;</span> <span class="nt">/&gt;</span>
<a name="cl-160"></a>
<a name="cl-161"></a>                <span class="nt">&lt;/form&gt;</span>
<a name="cl-162"></a>                        
<a name="cl-163"></a>                
<a name="cl-164"></a>        <span class="nt">&lt;/div&gt;</span>
<a name="cl-165"></a>
<a name="cl-166"></a><span class="nt">&lt;/body&gt;</span>
<a name="cl-167"></a><span class="nt">&lt;/html&gt;</span>
</pre></div>
</td></tr></table>
		
		</div>
	
</div>



      </div>
    </div>

  </div>

  <div id="footer">
    <ul id="footer-nav">
      <li>Copyright © 2011 <a href="http://atlassian.com">Atlassian</a></li>
      <li><a href="http://www.atlassian.com/hosted/terms.jsp">Terms of Service</a></li>
      <li><a href="http://www.atlassian.com/about/privacy.jsp">Privacy</a></li>
      <li><a href="//bitbucket.org/site/master/issues/new">Report a Bug</a></li>
      <li><a href="http://confluence.atlassian.com/x/IYBGDQ">API</a></li>
      <li><a href="http://status.bitbucket.org/">Server Status</a></li>
    </ul>
    <ul id="social-nav">
      <li class="blog"><a href="http://blog.bitbucket.org">Bitbucket Blog</a></li>
      <li class="twitter"><a href="http://www.twitter.com/bitbucket">Twitter</a></li>
    </ul>
    <h5>We run</h5>
    <ul id="technologies">
      <li><a href="http://www.djangoproject.com/">Django 1.2.5</a></li>
      <li><a href="//bitbucket.org/jespern/django-piston/">Piston 0.3dev</a></li>
      <li><a href="http://www.selenic.com/mercurial/">Hg 1.7.2</a></li>
      <li><a href="http://www.python.org">Python 2.7.0</a></li>
      <li>r7249:c787b27dca1c | bitbucket03</li>
    </ul>
  </div>

  <script src="https://d1ga6s3xdhzo1c.cloudfront.net/9c38fa9173b4/js/lib/global.js"></script>






  <script src="//cdn.optimizely.com/js/4079040.js"></script>
  <script type="text/javascript">
    BB.gaqPush(['_trackPageview']);
  
    BB.gaqPush(['atl._trackPageview']);

    

    

    (function () {
        var ga = document.createElement('script');
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        ga.setAttribute('async', 'true');
        document.documentElement.firstChild.appendChild(ga);
    }());
  </script>

</body>
</html>
