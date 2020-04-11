<HTML>

<head>
  <title>Job Matching</title>
</head>

<style media="screen">
  .container {
    max-width: 400px;
    width: 100%;
    margin: 0 auto;
    position: relative;
    border: 1px solid black;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }

  select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
  }

  button[type=search] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
</style>

<body bgcolor="#E6E6FA">

  <?php

  if (isset($_POST['search']))
  {
    $skill1 =  $_POST["skill1"];
    $skill2 =  $_POST["skill2"];
    $skill3 =  $_POST["skill3"];
    $skill4 =  $_POST["skill4"];

    $skill1 = "'".$skill1."'";
    $skill2 = "'".$skill2."'";
    $skill3 = "'".$skill3."'";
    $skill4 = "'".$skill4."'";

    $conn = mysqli_connect("localhost", "admin", "adminspassword", "jobdatabase");

    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $output = "";


    //retrieving job match for skill1

    $result1= mysqli_query($conn,"SELECT job FROM jobstable WHERE skill=$skill1");

    $row = mysqli_fetch_assoc($result1);

    $result1 = $row['job'];

    mysqli_close($conn);


    //retrieving job match for skill2

    $conn = mysqli_connect("localhost", "admin", "adminspassword", "jobdatabase");

    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $result2= mysqli_query($conn,"SELECT job FROM jobstable WHERE skill=$skill2");

    $row = mysqli_fetch_assoc($result2);

    $result2 = $row['job'];

    mysqli_close($conn);


    //retrieving job match for skill3

    $conn = mysqli_connect("localhost", "admin", "adminspassword", "jobdatabase");

    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $result3= mysqli_query($conn,"SELECT job FROM jobstable WHERE skill=$skill3");

    $row = mysqli_fetch_assoc($result3);

    $result3 = $row['job'];

    mysqli_close($conn);


    //retrieving job match for skill4

    $conn = mysqli_connect("localhost", "admin", "adminspassword", "jobdatabase");

    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $result4= mysqli_query($conn,"SELECT job FROM jobstable WHERE skill=$skill4");

    $row = mysqli_fetch_assoc($result4);

    $result4 = $row['job'];

    mysqli_close($conn);

    //Checking if all the four matches are same or not

    if($result1 != "" && strcmp($result1,$result2)==0 && strcmp($result1,$result3)==0 && strcmp($result1,$result4)==0)
    {
      $output = " Your matching job is $result1";
    }
    else {
      $output = "No matching job found";
    }

  }


  ?>
  <form class="container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <h3>Job Matching Form</h3>
    <h4>Please choose your skills</h4>
    <table>
      <tr>
        <td>
          <b>
            <label for="job">skill1: </label>
          </b>
        </td>
        <td>
          <select id="job" name="skill1">
            <option value="select">select</option>
            <option value="Media advertising expertise">Media advertising expertise</option>
            <option value="Design skills">Design skills</option>
            <option value="wordpress">wordpress</option>
            <option value="creative">creative</option>
            <option value="software design">software design</option>
            <option value="java">java</option>
            <option value="problem solving">problem solving</option>
            <option value="team work">team work</option>
            <option value="HTML">HTML</option>
            <option value="CSS">CSS</option>
            <option value="javascript">javascript</option>
            <option value="Hardware">Hardware</option>
            <option value="Software">Software</option>
            <option value="customer service ethos">customer service ethos</option>
            <option value="logical thinking">logical thinking</option>
            <option value="leadership">leadership</option>
            <option value="project recovery">project recovery</option>
            <option value="task management">task management</option>
            <option value="risk management">risk management</option>
            <option value="generate idea">generate idea</option>
            <option value="IT skills">IT skills</option>
            <option value="manage different task">manage different task</option>
            <option value="communication skills">communication skills</option>
            <option value="good analyzer">good analyzer</option>
            <option value="application design">application design</option>
            <option value="presentation skills">presentation skills</option>
            <option value="data visualization">data visualization</option>
            <option value="critical thinking">critical thinking</option>
            <option value="cloud computing">cloud computing</option>
            <option value="programming">programming</option>
            <option value="analytical thinking">analytical thinking</option>
            <option value="applied math">applied math</option>
            <option value="statistics">statistics</option>
            <option value="data migration">data migration</option>
            <option value="analytical skills">analytical skills</option>
            <option value="accuracy">accuracy</option>
            <option value="sql">sql</option>
            <option value="organizational skills">organizational skills</option>
            <option value="data science">data science</option>
            <option value="database">database</option>
            <option value="data warehousing">data warehousing</option>
            <option value="data management">data management</option>
            <option value="design">design</option>
            <option value="photo editing">photo editing</option>
            <option value="computer graphics">computer graphics</option>
            <option value="creativity">creativitygenerate idea</option>
            <option value="front end technology">front end technology</option>
            <option value="data structure and algorithm">data structure and algorithm</option>
            <option value="design ability">design ability</option>
            <option value="Agile">Agile</option>
            <option value="operating system">operating system</option>
            <option value="CLI">CLI</option>
            <option value="machine learning">machine learning</option>
            <option value="unstructured data">unstructured data</option>
            <option value="intrusion detection">intrusion detection</option>
            <option value="firewalls">firewalls</option>
            <option value="threat modelling">threat modelling</option>
            <option value="ethical hacking">ethical hacking</option>

          </select>
        </td>
      </tr>

      <tr>
        <td>
          <b>
            <label for="job">skill2: </label>
          </b>
        </td>
        <td>
          <select id="job" name="skill2">
            <option value="select">select</option>
            <option value="Media advertising expertise">Media advertising expertise</option>
            <option value="Design skills">Design skills</option>
            <option value="wordpress">wordpress</option>
            <option value="creative">creative</option>
            <option value="software design">software design</option>
            <option value="java">java</option>
            <option value="problem solving">problem solving</option>
            <option value="team work">team work</option>
            <option value="HTML">HTML</option>
            <option value="CSS">CSS</option>
            <option value="javascript">javascript</option>
            <option value="Hardware">Hardware</option>
            <option value="Software">Software</option>
            <option value="customer service ethos">customer service ethos</option>
            <option value="logical thinking">logical thinking</option>
            <option value="leadership">leadership</option>
            <option value="project recovery">project recovery</option>
            <option value="task management">task management</option>
            <option value="risk management">risk management</option>
            <option value="generate idea">generate idea</option>
            <option value="IT skills">IT skills</option>
            <option value="manage different task">manage different task</option>
            <option value="communication skills">communication skills</option>
            <option value="good analyzer">good analyzer</option>
            <option value="application design">application design</option>
            <option value="presentation skills">presentation skills</option>
            <option value="data visualization">data visualization</option>
            <option value="critical thinking">critical thinking</option>
            <option value="cloud computing">cloud computing</option>
            <option value="programming">programming</option>
            <option value="analytical thinking">analytical thinking</option>
            <option value="applied math">applied math</option>
            <option value="statistics">statistics</option>
            <option value="data migration">data migration</option>
            <option value="analytical skills">analytical skills</option>
            <option value="accuracy">accuracy</option>
            <option value="sql">sql</option>
            <option value="organizational skills">organizational skills</option>
            <option value="data science">data science</option>
            <option value="database">database</option>
            <option value="data warehousing">data warehousing</option>
            <option value="data management">data management</option>
            <option value="design">design</option>
            <option value="photo editing">photo editing</option>
            <option value="computer graphics">computer graphics</option>
            <option value="creativity">creativitygenerate idea</option>
            <option value="front end technology">front end technology</option>
            <option value="data structure and algorithm">data structure and algorithm</option>
            <option value="design ability">design ability</option>
            <option value="Agile">Agile</option>
            <option value="operating system">operating system</option>
            <option value="CLI">CLI</option>
            <option value="machine learning">machine learning</option>
            <option value="unstructured data">unstructured data</option>
            <option value="intrusion detection">intrusion detection</option>
            <option value="firewalls">firewalls</option>
            <option value="threat modelling">threat modelling</option>
            <option value="ethical hacking">ethical hacking</option>

          </select>
        </td>
      </tr>

      <tr>
        <td>
          <b>
            <label for="job">skill3: </label>
          </b>
        </td>
        <td>
          <select id="job" name="skill3">
            <option value="select">select</option>
            <option value="Media advertising expertise">Media advertising expertise</option>
            <option value="Design skills">Design skills</option>
            <option value="wordpress">wordpress</option>
            <option value="creative">creative</option>
            <option value="software design">software design</option>
            <option value="java">java</option>
            <option value="problem solving">problem solving</option>
            <option value="team work">team work</option>
            <option value="HTML">HTML</option>
            <option value="CSS">CSS</option>
            <option value="javascript">javascript</option>
            <option value="Hardware">Hardware</option>
            <option value="Software">Software</option>
            <option value="customer service ethos">customer service ethos</option>
            <option value="logical thinking">logical thinking</option>
            <option value="leadership">leadership</option>
            <option value="project recovery">project recovery</option>
            <option value="task management">task management</option>
            <option value="risk management">risk management</option>
            <option value="generate idea">generate idea</option>
            <option value="IT skills">IT skills</option>
            <option value="manage different task">manage different task</option>
            <option value="communication skills">communication skills</option>
            <option value="good analyzer">good analyzer</option>
            <option value="application design">application design</option>
            <option value="presentation skills">presentation skills</option>
            <option value="data visualization">data visualization</option>
            <option value="critical thinking">critical thinking</option>
            <option value="cloud computing">cloud computing</option>
            <option value="programming">programming</option>
            <option value="analytical thinking">analytical thinking</option>
            <option value="applied math">applied math</option>
            <option value="statistics">statistics</option>
            <option value="data migration">data migration</option>
            <option value="analytical skills">analytical skills</option>
            <option value="accuracy">accuracy</option>
            <option value="sql">sql</option>
            <option value="organizational skills">organizational skills</option>
            <option value="data science">data science</option>
            <option value="database">database</option>
            <option value="data warehousing">data warehousing</option>
            <option value="data management">data management</option>
            <option value="design">design</option>
            <option value="photo editing">photo editing</option>
            <option value="computer graphics">computer graphics</option>
            <option value="creativity">creativitygenerate idea</option>
            <option value="front end technology">front end technology</option>
            <option value="data structure and algorithm">data structure and algorithm</option>
            <option value="design ability">design ability</option>
            <option value="Agile">Agile</option>
            <option value="operating system">operating system</option>
            <option value="CLI">CLI</option>
            <option value="machine learning">machine learning</option>
            <option value="unstructured data">unstructured data</option>
            <option value="intrusion detection">intrusion detection</option>
            <option value="firewalls">firewalls</option>
            <option value="threat modelling">threat modelling</option>
            <option value="ethical hacking">ethical hacking</option>

          </select>
        </td>
      </tr>

      <tr>
        <td>
          <b>
            <label for="job">skill4: </label>
          </b>
        </td>
        <td>
          <select id="job" name="skill4">
            <option value="select">select</option>
            <option value="Media advertising expertise">Media advertising expertise</option>
            <option value="Design skills">Design skills</option>
            <option value="wordpress">wordpress</option>
            <option value="creative">creative</option>
            <option value="software design">software design</option>
            <option value="java">java</option>
            <option value="problem solving">problem solving</option>
            <option value="team work">team work</option>
            <option value="HTML">HTML</option>
            <option value="CSS">CSS</option>
            <option value="javascript">javascript</option>
            <option value="Hardware">Hardware</option>
            <option value="Software">Software</option>
            <option value="customer service ethos">customer service ethos</option>
            <option value="logical thinking">logical thinking</option>
            <option value="leadership">leadership</option>
            <option value="project recovery">project recovery</option>
            <option value="task management">task management</option>
            <option value="risk management">risk management</option>
            <option value="generate idea">generate idea</option>
            <option value="IT skills">IT skills</option>
            <option value="manage different task">manage different task</option>
            <option value="communication skills">communication skills</option>
            <option value="good analyzer">good analyzer</option>
            <option value="application design">application design</option>
            <option value="presentation skills">presentation skills</option>
            <option value="data visualization">data visualization</option>
            <option value="critical thinking">critical thinking</option>
            <option value="cloud computing">cloud computing</option>
            <option value="programming">programming</option>
            <option value="analytical thinking">analytical thinking</option>
            <option value="applied math">applied math</option>
            <option value="statistics">statistics</option>
            <option value="data migration">data migration</option>
            <option value="analytical skills">analytical skills</option>
            <option value="accuracy">accuracy</option>
            <option value="sql">sql</option>
            <option value="organizational skills">organizational skills</option>
            <option value="data science">data science</option>
            <option value="database">database</option>
            <option value="data warehousing">data warehousing</option>
            <option value="data management">data management</option>
            <option value="design">design</option>
            <option value="photo editing">photo editing</option>
            <option value="computer graphics">computer graphics</option>
            <option value="creativity">creativitygenerate idea</option>
            <option value="front end technology">front end technology</option>
            <option value="data structure and algorithm">data structure and algorithm</option>
            <option value="design ability">design ability</option>
            <option value="Agile">Agile</option>
            <option value="operating system">operating system</option>
            <option value="CLI">CLI</option>
            <option value="machine learning">machine learning</option>
            <option value="unstructured data">unstructured data</option>
            <option value="intrusion detection">intrusion detection</option>
            <option value="firewalls">firewalls</option>
            <option value="threat modelling">threat modelling</option>
            <option value="ethical hacking">ethical hacking</option>

          </select>
        </td>
      </tr>
    </table>
    <br>
    <button type="search" name="search"> Search </button>
  </form>

  <?php
    if (isset($_POST['search']) && output != "")
    {
      echo nl2br("\n\n\n $output");
    }
  ?>

</body>

</html>
