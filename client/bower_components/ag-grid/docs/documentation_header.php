<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeyboards; ?>"/>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.8/angular.min.js"></script>

    <script src="/documentation.js"></script>

    <link rel="stylesheet" href="/documentation.css">
    <link rel="stylesheet" href="/style.css">

    <link rel="shortcut icon" href="http://www.angulargrid.com/favicon.ico" />

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-60553231-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>

<body ng-app="documentation">

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header top-header big-text">
                <a class="top-button" href="/index.html"> <i class="fa fa-home"></i> Home</a>
                <a class="top-button" href="/example.html"> <i class="fa fa-bicycle"></i> Test Drive</a>
                <a class="top-button-selected" href="/documentation.php"> <i class="fa fa-book"></i> Documentation</a>
                <a class="top-button" href="/why-the-world-needed-another-angularjs-grid/"> <i class="fa fa-road"></i> Story</a>
                <a class="top-button" href="/forum"> <i class="fa fa-users"></i> Forum</a>
            </div>
            <div style="float:right;" class="navbar-header top-header">

                <a class='share-link' href="https://www.facebook.com/sharer/sharer.php?u=www.angulargrid.com">
                    <img src="/images/facebook_32.png" alt="Share on Facebook" title="Share on Facebook"/>
                </a>

                <a class='share-link' href="https://twitter.com/home?status=Check%20out%20AngularGrid,%20a%20new%20way%20to%20show%20grid%20data%20for%20AngularJS">
                    <img src="/images/twitter_32.png" alt="Share on Twitter" title="Share on Twitter"/>
                </a>

                <a class='share-link' href="https://plus.google.com/share?url=www.angulargrid.com">
                    <img src="/images/googleplus_32.png" alt="Share on Google Plus" title="Share on Google Plus"/>
                </a>

                <a class='share-link' href="https://www.linkedin.com/shareArticle?mini=true&url=www.angulargrid.com&title=Angular%20Grid&summary=A%20new%20way%20to%20show%20grid%20data%20for%20AngularJS&source=">
                    <img src="/images/linkedin_32.png" alt="Share on LinkedIn" title="Share on LinkedIn"/>
                </a>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 70px">

        <div class="row">

            <div class="col-sm-2">

                <div style="display: inline-block;">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal � The safer, easier way to pay online.">
                    </form>
                </div>

                <h4>
                    The Basics
                </h4>

                <?php if ($key == "Install") { ?>
                    <span class="sidebarLinkSelected">Install</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-install/index.php">Install</a>
                <?php } ?>

                <?php if ($key == "Getting Started") { ?>
                    <span class="sidebarLinkSelected">Getting Started</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-getting-started/index.php">Getting Started</a>
                <?php } ?>

                <?php if ($key == "Grid Options") { ?>
                    <span class="sidebarLinkSelected">Grid Options</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-grid-options/index.php">Grid Options</a>
                <?php } ?>


                <h4>
                    Columns & Cells
                </h4>

                <?php if ($key == "Column Definitions") { ?>
                    <span class="sidebarLinkSelected">Column Definitions</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-column-definitions/index.php">Column Definitions</a>
                <?php } ?>

                <?php if ($key == "Sorting") { ?>
                    <span class="sidebarLinkSelected">Sorting</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-sorting/index.php">Sorting</a>
                <?php } ?>

                <?php if ($key == "Filtering") { ?>
                    <span class="sidebarLinkSelected">Filtering</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-filtering/index.php">Filtering</a>
                <?php } ?>

                <?php if ($key == "Resizing") { ?>
                    <span class="sidebarLinkSelected">Resizing</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-resizing/index.php">Resizing</a>
                <?php } ?>

                <?php if ($key == "Pinning") { ?>
                    <span class="sidebarLinkSelected">Pinning</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-pinning/index.php">Pinning</a>
                <?php } ?>

                <?php if ($key == "Selection") { ?>
                    <span class="sidebarLinkSelected">Selection</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-selection/index.php">Selection</a>
                <?php } ?>

                <?php if ($key == "Value Getters") { ?>
                    <span class="sidebarLinkSelected">Value Getters</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-value-getters/index.php">Value Getters</a>
                <?php } ?>

                <?php if ($key == "Cell Styling") { ?>
                    <span class="sidebarLinkSelected">Cell Styling</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-cell-styling/index.php">Cell Styling</a>
                <?php } ?>

                <?php if ($key == "Cell Rendering") { ?>
                    <span class="sidebarLinkSelected">Cell Rendering</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-cell-rendering/index.php">Cell Rendering</a>
                <?php } ?>

                <?php if ($key == "Cell Templates") { ?>
                    <span class="sidebarLinkSelected">Cell Templates</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-cell-template/index.php">Cell Templates</a>
                <?php } ?>

                <?php if ($key == "Editing") { ?>
                    <span class="sidebarLinkSelected">Editing Cells</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-editing/index.php">Editing Cells</a>
                <?php } ?>

                <?php if ($key == "Context") { ?>
                    <span class="sidebarLinkSelected">Context</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-context/index.php">Context</a>
                <?php } ?>

                <?php if ($key == "Refresh") { ?>
                    <span class="sidebarLinkSelected">Refresh</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-refresh/index.php">Refresh</a>
                <?php } ?>

                <?php if ($key == "Grouping Headers") { ?>
                    <span class="sidebarLinkSelected">Grouping Headers</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-grouping-headers/index.php">Grouping Headers</a>
                <?php } ?>

                <?php if ($key == "Header Rendering") { ?>
                    <span class="sidebarLinkSelected">Header Rendering</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-header-rendering/index.php">Header Rendering</a>
                <?php } ?>

                <?php if ($key == "Keyboard Navigation") { ?>
                    <span class="sidebarLinkSelected">Keyboard Navigation</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-keyboard-navigation/index.php">Keyboard Navigation</a>
                <?php } ?>

                <?php if ($key == "Internationalisation") { ?>
                    <span class="sidebarLinkSelected">Internationalisation</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-internationalisation/index.php">Internationalisation</a>
                <?php } ?>

                <h4>
                    Working with Data
                </h4>

                <?php if ($key == "Grouping") { ?>
                    <span class="sidebarLinkSelected">Grouping & Aggregating Rows</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-grouping/index.php">Grouping & Aggregating Rows</a>
                <?php } ?>

                <?php if ($key == "Tool Panel") { ?>
                    <span class="sidebarLinkSelected">Tool Panel</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-tool-panel/index.php">Tool Panel</a>
                <?php } ?>

                <?php if ($key == "Column API") { ?>
                    <span class="sidebarLinkSelected">Column API</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-column-api/index.php">Column API</a>
                <?php } ?>

                <h4>
                    Paging
                </h4>

                <?php if ($key == "Datasource") { ?>
                    <span class="sidebarLinkSelected">Datasource</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-datasource/index.php">Datasource</a>
                <?php } ?>

                <?php if ($key == "Pagination") { ?>
                    <span class="sidebarLinkSelected">Pagination</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-pagination/index.php">Pagination</a>
                <?php } ?>

                <?php if ($key == "Virtual Paging / Infinite Scrolling") { ?>
                    <span class="sidebarLinkSelected">Virtual Paging / Infinite Scrolling</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-virtual-paging/index.php">Virtual Paging<br/>& Infinite Scrolling</a>
                <?php } ?>

                <h4>
                    Other Bits
                </h4>

                <?php if ($key == "Angular Compiling") { ?>
                    <span class="sidebarLinkSelected">Angular Compiling</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-angular-compiling/index.php">Angular Compiling</a>
                <?php } ?>

                <?php if ($key == "Styling") { ?>
                    <span class="sidebarLinkSelected">Layout & Styling</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-styling/index.php">Layout & Styling</a>
                <?php } ?>

                <?php if ($key == "Icons") { ?>
                    <span class="sidebarLinkSelected">Icons</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-icons/index.php">Icons</a>
                <?php } ?>

                <?php if ($key == "Loading Overlay") { ?>
                    <span class="sidebarLinkSelected">Loading Overlay</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-loading/index.php">Loading Overlay</a>
                <?php } ?>

                <?php if ($key == "No Scrolls") { ?>
                    <span class="sidebarLinkSelected">No Scrolling</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-no-scrolls/index.php">No Scrolling</a>
                <?php } ?>

                <?php if ($key == "API") { ?>
                    <span class="sidebarLinkSelected">API</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/angular-grid-api/index.php">API</a>
                <?php } ?>

                <h4>
                    Examples
                </h4>

                <?php if ($key == "Data Grid") { ?>
                    <span class="sidebarLinkSelected">Data Grid</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/example-data-grid/index.php">Data Grid</a>
                <?php } ?>

                <?php if ($key == "Styled Report") { ?>
                    <span class="sidebarLinkSelected">Styled Report</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/example-account-report/index.php">Styled Report</a>
                <?php } ?>

                <?php if ($key == "File Browser") { ?>
                    <span class="sidebarLinkSelected">File Browser</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/example-file-browser/index.php">File Browser</a>
                <?php } ?>

                <?php if ($key == "Expressions and Context") { ?>
                    <span class="sidebarLinkSelected">Expressions and Context</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/example-expressions-and-context/index.php">Expressions and Context</a>
                <?php } ?>

                <?php if ($key == "No Angular") { ?>
                    <span class="sidebarLinkSelected">No AngularJS</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="/example-html5-datagrid/index.php">No AngularJS</a>
                <?php } ?>

            </div>

            <div class="col-sm-10 blog-main">