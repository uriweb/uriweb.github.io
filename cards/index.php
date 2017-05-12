<!DOCTYPE html>
<html lang="en-US">

	<head>
        <meta http-equiv="X-UA-Compatible" content="IE=8, IE=9">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cards</title>
        <link rel="stylesheet" type="text/css" href="../css/playground.css">
        <link rel="stylesheet" type="text/css" href="../nextgen/style.css">
        <link href="https://fonts.googleapis.com/css?family=Hind:400,600|Open+Sans:400,700" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="../js/main.js"></script>
        <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    </head>
	
	<body class="nav-cards">
        
        <nav>
            <script>$('nav').load('../includes/nav.html');</script>
        </nav>
            
        <main>
            
            <h1>Cards</h1>
            <img class="wireframe right" src="../media/wireframes/cards.svg" alt="Cards">
            <p>A card is a container with abridged contents, serving as an entry-point to more detailed information.</p>
            
            <ul id="localnav">
                <li><a href="#action">Action Card</a></li>
                <li><a href="#detail">Detail Card</a></li>
                <li><a href="#usage">Usage</a></li>
                <li><a href="#construction">Construction</a></li>
            </ul>
            
            <section id="action">
                <h2>Action Card</h2>
                <h4>Action cards prompt user action with summary language and a button.</h4>
                <p>Two types of action cards can be used depending on layout and content.</p>
                    
                <article>
                    <h3>Standard Card</h3>
                    <p>Standard cards are narrow cards that can live both inside and outside of a column framework.  A image is optional.</p>
                    <p>Standard cards are implemented with the class <code class="class">card</code></p>

                    <div class="cols thirds">
                        <div>
                            <xmp class="prettyprint">
<div class="card">
    <h1>Title</h1>
    <p>Paragraph text.</p> 
    <a class="button">Button</a>
</div>    
                            </xmp>
                            <div class="card">
                                <h1>Simple</h1>
                                <p>This is the most basic action card.</p>
                                <a href="" class="button">Learn more</a>
                            </div>
                        </div>
                        <div>
                            <xmp class="prettyprint">
<div class="card">
    <img>
    <h1>Title</h1>
    <p>Paragraph text.</p>
    <a class="button">Button</a>
</div>                       
                            </xmp>
                            <div class="card">
                                <img src="../media/native/hero_1.jpg" alt="Card Hero 1">
                                <h1>The Real Deal</h1>
                                <p>This is a more elaborate card, with a banner image and longer text.  Text should not be too long though&mdash;two or three sentences should be enough to entice user action.</p>
                                <a href="" class="button">Explore</a>
                            </div>
                        </div>
                        <div></div><!-- spacer column -->
                    </div>
                    <p>Standard cards preserve the original aspect ratio of any image used.</p>
                </article>
                
                <article>
                    <h3>Flex Card</h3>
                    <p>Flex cards display text and an image side-by-side when space allows, and collapse into the standard card format at narrow browser widths.  Unlike standard cards, flex cards must have an image and cannot live in columns.</p>
                    <p>Flex cards are implemented with the class <code class="class">flexcard</code></p>
                    <xmp class="prettyprint">
<div class="flexcard">
    <figure>
        <img>
    </figure>
    <article>
        <h1>Title</h1>
        <p>Paragraph text.</p>
        <a class="button">Button</a>
    </article>
</div>                       
                    </xmp>
                    <div class="flexcard">
                        <figure>
                            <img src="../media/native/hero_1.jpg" alt="Card Hero 1">
                        </figure>
                        <article>
                            <h1>Lorem Ipsum Dolor</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae erat blandit dui ultrices cursus in vel odio. Phasellus molestie ultricies pulvinar. Nullam malesuada libero a nibh tristique ultricies.</p>
                            <p>Vivamus elementum metus massa, et molestie nisl porttitor ac. Suspendisse nec mi ante. In sed dictum quam. Morbi in nulla fermentum, semper enim in, rhoncus diam. Integer lobortis dictum faucibus.</p>
                            <a class="button" href="">Learn More</a>
                        </article>
                    </div>
                    <p>Note that the image must be nested in <code class="tag">&lt;figure&gt;</code> tags. In the full-width layout, the height of the figure is dependent on the height of the article, and image covers the figure.  At narrow widths, the image behaves as though it is in a standard card, and is not cropped.</p>
                    <h4>Flex card layouts can be reversed</h4>
                    <p>By default, text displays on the left side and the image displays on the right.  The layout can be reversed by adding the class <code class="class">rtl</code> to the flex card. This will not change how the card behaves at narrow browser widths.</p>
                    <p>Note that the figure block must always come before the article block, regardless of layout.</p>
                    <xmp class="prettyprint">
<div class="flexcard rtl">
    <figure>
        <img>
    </figure>
    <article>
        <h1>Title</h1>
        <p>Paragraph text.</p>
        <a class="button">Button</a>
    </article>
</div>                       
                    </xmp>
                    <div class="flexcard rtl">
                        <figure>
                            <img src="../media/native/hero_1.jpg" alt="Card Hero 1">
                        </figure>
                        <article>
                            <h1>Lorem Ipsum Dolor</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae erat blandit dui ultrices cursus in vel odio. Phasellus molestie ultricies pulvinar. Nullam malesuada libero a nibh tristique ultricies.</p>
                            <p>Vivamus elementum metus massa, et molestie nisl porttitor ac. Suspendisse nec mi ante. In sed dictum quam. Morbi in nulla fermentum, semper enim in, rhoncus diam. Integer lobortis dictum faucibus.</p>
                            <a class="button" href="">Learn More</a>
                        </article>
                    </div>
                </article>
                
            </section>
            
            <section id="detail">
                <h2>Detail Card</h2>
                <h4>Detail cards have text and an optional thumbnail image on the right-hand side.</h4>
                <p>Detail cards are implemented with the class <code class="class">dcard</code>
                <div class="cols thirds">
                    <div>
                        <xmp class="prettyprint">
<div class="dcard">
    <h1>Title</h1>
    <p>Brief phrase.</p>
</div>                  
                        </xmp>
                        <div class="dcard">
                            <h1>Lorem ipsum</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div>
                        <xmp class="prettyprint">
<div class="dcard">
    <img>
    <h1>Title</h1>
    <p>Brief phrase.</p>
</div>   
                        </xmp>
                        <div class="dcard">
                            <img src="../media/commons/profile_1.jpg" alt="Profile 1">
                            <h1>Lorem ipsum</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div></div>
                </div>
                <p>Detail cards preserve the original aspect ratio of the image used, but square images are recommended and preferred.</p>
                
            </section><!-- End Detail Card -->
            
            <section id="usage">
                <h2>Usage</h2>
                <h4>Card content is isolated.</h4>
                <div class="cols thirds">
                    <div>
                        <p>The purpose of cards is to highlight information with the goal of enticing user action.  Cards should not be used simply to emphasize some content or act as a header.</p>
                        <p><b>A good test is this:</b> If removing the card from the page makes it more difficult to understand other page content, the card is not being used properly.</p>
                    </div>
                    <div class="comparison dont">
                        <img src="../media/comparisons/card-usage-isolation-dont.jpg" alt="What not to do with columns">
                        <span>Don't</span>
                        <p>Containing primary information in a card degrades its relationship with secondary information below. Removing the card makes the subject of other column content unclear.</p>
                    </div>
                    <div class="comparison instead">
                        <img src="../media/comparisons/card-usage-isolation-do.jpg" alt="What to do with columns">
                        <span>Instead</span>
                        <p>In this case, use native column features. There are no nested elements, and the subject of all information is clear.</p>
                    </div>
                </div>
                <article>
                    <h4>Flex cards and detail cards can live inside columns.</h4>
                    <p>A card collection can be created by placing cards into the <a class="component" href="../columns/">column</a> framework.</p>
                    <xmp class="prettyprint">
<div class="cols thirds">
    <div>
        <div class="card">...</div>
        ...
    </div>
    <div>
        <div class="card">...</div>
        ...
    </div>
    ...
</div>           
                    </xmp>
                    <div class="cols thirds">
                        <div>
                            <div class="card">
                                <a href=""><img src="../media/native/uritoday_1.jpg" alt="URI Today 1"></a>
                                <h1>A Great Story</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac hendrerit diam. Cras facilisis sem non magna placerat tincidunt. Ut id dolor aliquet, consectetur libero vitae, placerat mauris. Proin placerat tortor id est dignissim, a pulvinar metus blandit.</p>
                                <a href="" class="button">Read Story</a>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <a href=""><img src="../media/native/uritoday_2.jpg" alt="URI Today 2"></a>
                                <h1>Wait, There's More</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac hendrerit diam. Cras facilisis sem non magna placerat tincidunt. </p>
                                <a href="" class="button">Read Story</a>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <a href=""><img src="../media/native/uritoday_3.jpg" alt="URI Today 3"></a>
                                <h1>Third Time's A Charm</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac hendrerit diam. Cras facilisis sem non magna placerat tincidunt. Ut id dolor aliquet, consectetur libero vitae, placerat mauris.</p>
                                <a href="" class="button">Read Story</a>
                            </div>
                        </div>
                    </div>
                    <xmp class="prettyprint">
<div class="cols thirds">
    <div>
        <div class="dcard">...</div>
        ...
    </div>
    <div>
        <div class="dcard">...</div>
        ...
    </div>
    ...
</div>           
                    </xmp>
                    <div class="cols thirds">
                        <div>
                            <div class="dcard">
                                <img src="../media/commons/profile_1.jpg" alt="Profile 1">
                                <h1>Lorem ipsum</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p><a href="#">someone@uri.edu</a></p>
                            </div>
                        </div>
                        <div>
                            <div class="dcard">
                                <img src="../media/commons/profile_2.jpg" alt="Profile 2">
                                <h1>Lorem ipsum</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p>401.555.3792</p>
                            </div>
                        </div>
                        <div>
                            <div class="dcard">
                                <img src="../media/commons/profile_3.jpg" alt="Profile 3">
                                <h1>Lorem ipsum</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p><a href="">today.uri.edu</a></p>
                            </div>
                        </div>
                    </div>
                
                </article>
                
                <article>
                    <h4>Card images can be clickable.</h4>
                    <p>To make the image clickable, nest the image in <code class="tag">&lt;a&gt;</code> tags.</p>
                    <p>In action cards, the image should link to the same destination as the button.</p>
                    <xmp class="prettyprint">
<div class="card">
    <a href=""><img></a>
    ...
</div>           
                    </xmp>
                    <div class="card">
                        <a href=""><img src="../media/native/hero_1.jpg" alt="Card Hero 1"></a>
                        <h1>Lorem Ipsum Dolor</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis aliquet diam, vel bibendum velit scelerisque in. Curabitur ut velit sapien.</p>
                        <a href="" class="button">Learn more</a>
                    </div>
                    <xmp class="prettyprint">
<div class="flexcard">
    <figure>
        <a href=""><img></a>
    </figure>
    ...
</div>                       
                    </xmp>
                    <div class="flexcard">
                        <figure>
                            <a href=""><img src="../media/native/hero_1.jpg" alt="Card Hero 1"></a>
                        </figure>
                        <article>
                            <h1>Lorem Ipsum Dolor</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae erat blandit dui ultrices cursus in vel odio. Phasellus molestie ultricies pulvinar. Nullam malesuada libero a nibh tristique ultricies.</p>
                            <p>Vivamus elementum metus massa, et molestie nisl porttitor ac. Suspendisse nec mi ante. In sed dictum quam. Morbi in nulla fermentum, semper enim in, rhoncus diam. Integer lobortis dictum faucibus.</p>
                            <a class="button" href="">Learn More</a>
                        </article>
                    </div>
                    <xmp class="prettyprint">
<div class="dcard">
    <figure>
        <a href=""><img></a>
    </figure>
    ...
</div>           
                    </xmp>
                    <div class="dcard">
                        <figure>
                            <a href=""><img src="../media/commons/profile_1.jpg" alt="Profile 1"></a>
                        </figure>
                        <h1>Lorem ipsum</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </article>

            </section><!-- end usage -->
            
            <section id="construction">
                <h2>Construction</h2>
                <h4>Cards are elevated.</h4>
                <p>Cards exist above the page, not on it.  A box shadow is used to achieve this appearance.</p>
                <br />
                <ul class="construction-list">
                    <li class="section">Box shadow</li>
                    <li>x-offset: none</li>
                    <li>y-offset: 0.1rem</li>
                    <li>Radius: 0.3rem</li>
                    <li>Color: $black #000, 15% alpha</li>
                </ul>
                <div class="cols thirds">
                    <div class="comparison do">
                        <img src="../media/comparisons/card-usage-elevation-do.jpg" alt="What to do with elevation">
                        <span>Do</span>
                        <p>Use a box shadow to elevate the card.</p>
                    </div>
                    <div class="comparison dont">
                        <img src="../media/comparisons/card-usage-elevation-dont.jpg" alt="What not to do with elevation">
                        <span>Don't</span>
                        <p>This is not a card. There is no indication that the content exists above the page.</p>
                    </div>
                    <div class="comparison dont">
                        <img src="../media/comparisons/card-usage-elevation-dont-border.jpg" alt="What also not to do with elevation">
                        <span>Don't</span>
                        <p>Do not place a border around the content to emulate a card.  This content still exists on the page plane.</p>
                    </div>
                </div>
                <article>
                    <div class="cols halves">
                        <div>
                            <h3>Standard Card</h3>
                            <h4>Dimensions</h4>
                            <ul class="construction-list">
                                <li class="section">Title</li>
                                <li>Top padding: 1.3rem</li>
                                <li>Side padding: 1.2rem</li>
                                <li>Line height: 1.6rem</li>
                                <li class="section">Paragraphs</li>
                                <li>First top padding: 1.2rem</li>
                                <li>Subsequent top padding: 1rem</li>
                                <li>Side padding: 1.2rem</li>
                                <li class="section">Button</li>
                                <li>Top margin: 2rem</li>
                                <li>Top border: 1px</li>
                                <li>Top padding: 1.5% card width + 1rem</li>
                                <li>Bottom padding: 1.5% card width + 1rem</li>
                            </ul>
                            <h4>Typography</h4>
                            <ul class="construction-list">
                                <li class="section">Title</li>
                                <li>Font size: 1.3rem</li>
                                <li>Line height: 1.6rem</li>
                                <li class="section">Paragraph</li>
                                <li>Font size: 0.8rem</li>
                                <li>Line height: 1.5rem</li>
                                <li class="section">Button</li>
                                <li>Font size: 0.7rem</li>
                                <li>Tracking: 0.1rem</li>
                            </ul>
                        </div>
                         <div>
                            <img src="../media/constructions/card-construction.jpg" class="figure" style="max-width: 477px;" alt="Standard card construction">
                        </div>
                    </div>
                </article>
                
                <article>
                    <h3>Flex Card</h3>
                    <p>The dimensions below apply to flex cards at full-width.  At narrow browser widths, flex cards assume the construction of standard cards.</p>
                    <div class="cols halves">
                        <div>
                            <h4>Dimensions</h4>
                            <ul class="construction-list">
                                <li class="section">Title</li>
                                <li>Top padding: 1.3rem</li>
                                <li>Side padding: 1.2rem</li>
                                <li>Line height: 1.6rem</li>
                                <li class="section">Pharagraphs</li>
                                <li>First top padding: 1.2rem</li>
                                <li>Subsequent top padding: 1rem</li>
                                <li>Side padding: 1.2rem</li>
                                <li class="section">Button</li>
                                <li>Top margin: 3rem</li>
                                <li>Top border: 1px</li>
                                <li>Top padding: 1.5% article width + 1rem</li>
                                <li>Bottom padding: 1.5% article width + 1rem</li>
                            </ul>
                        </div>
                        <div>
                            <h4>Typography</h4>
                            <ul class="construction-list">
                                <li class="section">Title</li>
                                <li>Font size: 1.3rem</li>
                                <li>Line height: 1.6rem</li>
                                <li class="section">Paragraph</li>
                                <li>Font size: 0.8rem</li>
                                <li>Line height: 1.5rem</li>
                                <li class="section">Button</li>
                                <li>Font size: 0.7rem</li>
                                <li>Case: uppercase</li>
                                <li>Tracking: 0.1rem</li>
                            </ul>
                        </div>
                    </div>
                    <img src="../media/constructions/flexcard-construction.jpg" class="figure" style="max-width: 996px;" alt="Flex card construction">
                </article>
            
            </section><!-- end construction -->
            
        </main>
                
        <footer>
            <script>$('footer').load('../includes/footer.html');</script>
        </footer>
        
    </body>
    
</html>