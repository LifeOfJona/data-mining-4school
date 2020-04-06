<!DOCTYPE html>
<html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CP465 Term Project</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700,900&display=swap" rel="stylesheet">
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name='format-detection' content='telephone=no' />
    <meta name='format-detection' content='address=no' />
    <meta name='format-detection' content='email=no' />
    <style type='text/css'>
        a {
            margin: 0;
            padding: 0;
            border: none !important;
            text-decoration: none !important;
        }

        table,
        tr,
        td,
        a,
        span {
            font-family: 'Arial', Helvetica, Arial, sans-serif;
        }
    </style>
    <style type="text/css">
        .tab {
            margin-left: 80px;
        }
    </style>

    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
</head>

<body>

    <h1 align="center">CP465 Term Project : Option 1 (Data Mining) </h1>
    <p align="center"> Implemented By: Yahya, Jona, Akhil, Kashif, Hamoudi and Razza.</p> <br>

    <p>Implemented the following 3 Algorithms:</p>
    <p class="tab">
        <strong>1</strong>.The <strong>C4.5 Algorithm</strong>, based on information gainratio, to build decisiontrees.
        <br />
        <strong>2</strong>.The <strong>Apriori Algorithm</strong> for mining association rules. <br />
        <strong>3</strong>.The <strong>k-Means Clustering Algorithm</strong>.</p> <br />


    <p>Brief Algorithm Description:</p>
    <!--  c4.5 Algorithm-->
    <p align="center">
        <strong>c4.5 Algorithm</strong>
    </p>
    <img src="c4.5.png" alt="Avatar" style="width:200px" class="center">
    <p style="text-indent :3em;">C4.5 is an algorithm used to generate a decision tree and it is developed by Ross
        Quinlan.
        The tree can be used for classification and for this reason, C4.5 is often referred to as a statistical
        classifier.
        C4.5 builds a decision trees from a set of training data using the concept of information entropy.</p>

    <!-- Apriori Algorithm-->
    <p align="center">
        <strong>Apriori Algorithm</strong>
    </p>
    <img src="apriori.png" alt="Avatar" style="width:400px" class="center">
    <p style="text-indent :3em;"> The Apriori algorithm was proposed by Agrawal and Srikant in 1994.
        The purpose of the algorithm is to find frequent item set in a dataset.
        The algorithm is designed to operate on dataset that contain transactions.
        It proceeds by identifying the frequent individual items in the database and extending them to larger and larger
        item sets if those item sets appear sufficiently often in the database.
        The frequent item sets determined by Apriori can be used to determine association rules which highlight general
        trends in the database.
        The algorithms has applications in domains such as market basket analysis.</p>

    <!-- K-Means Clustering Algorithm-->
    <p align="center">
        <strong>K-Means Clustering Algorithm</strong>
    </p>
    <img src="kmeans.png" alt="Avatar" style="width:300px" class="center">
    <p style="text-indent :3em;">K-means Clustering is a type of unsupervised learning algorithm, introduced by Stuart
        Lloyd.
        It is used to organize unlabeled data (i.e., data without defined categories or groups) based on feature
        similarity.
        The goal of this algorithm is to find groups in the data and cluster them, with the number of groups represented
        by the variable K.*</p>


    <p>To access each <strong>Algorithm</strong>, please click on the links below:</p> <br />

    <!--Hyperlinks to Repo. -->
    <center>
        <p><a href="https://github.com/yahya14/data-mining-4school/tree/master/C4.5">c4.5 Algorithm</a>
            |
            <a href="https://github.com/yahya14/data-mining-4school/tree/master/Apiori">Apriori Algorithm</a>
            |
            <a href="https://github.com/yahya14/data-mining-4school/tree/master/k-means">K-Means Algorithm</a>
    </center>

    <br>

    <p>You can find the link to the <strong>Data Set</strong>(s) used by clicking <a
            href="https://github.com/yahya14/data-mining-4school">here!</a> </p>

    <br>

    <!-- Outputs of our Algorithms with our Data Set:-->
    <p>These are the following <strong>Outputs</strong> of our Algorithms:</p>
    <center>
        <!-- C45 Algorithm -->
        <p><strong>c4.5 Algorithm</strong>
      
            <img src="c45_output.png" alt="Avatar" style="width:400px" class="center">

            <!-- Apriori Algorith -->
            <p><strong>Apriori Algorithm</strong>               
                <img src="apriori_output.png" alt="Avatar" style="width:400px" class="center">
                
                <!-- K-Means Algorithm-->
                <p><strong>K-Means Cluster Algorithm</strong>
                    
                    <img src="6clusters_output.png" alt="Avatar" style="width:400px" class="center">
                    <img src="6means_output2.png" alt="Avatar" style="width:400px" class="center">
                    <img src="6means_output3.png" alt="Avatar" style="width:400px" class="center">
    </center>


    </nav>
    <div id="content_area">
        <!-- CODE TO OBTAIN ANY USER INPUT MAY BE IMPLEMENTED HERE.-->
        <?php 
                 //ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
                 error_reporting(E_ERROR | E_WARNING | E_PARSE);
                    $myfirstVar = "";
                    
                    echo $content; 
                            
                ?>
        <footer>
            <p align="center">All Rights Reserved © </p>
        </footer>

    </div>

    </div>
</body>

</html>