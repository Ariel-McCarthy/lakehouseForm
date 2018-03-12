<!DOCTYPE html>
<html>
    <head>
        <link href = "CSS/styles.css" rel = "stylesheet" type = "text/css" />
        <title>Summer Lakehouse Reservation</title>
    </head>
    <body>
        <header>
            <h1>Summer Lakehouse Reservation Form</h1>
            <br/>
            <div2>*</div2>Required items are in <div2>red</div2>
        </header>

        <form action="index.php" method=GET>
            <div>First Name</div><input type=text name="FirstName" size=30>
            <div>Last Name</div><input type=text name="LastName" size=40><br/><br/>
            <div>Email Address</div><input type=text name="Email" size=60><br/><br/>
            
            <div>How many people will you be bringing?</div>
            <input type=radio name="amtGuests" value="0"> 0
            <input type=radio name="amtGuests" value="1"> 1
            <input type=radio name="amtGuests" value="2"> 2
            
            <br/><br/>
            
            <div1>Sign up to bring 3 items:</div1> (one of each)
            <br/>
            <div>Food:</div>
            <br/>
            <input type=radio name="food" value="for beans"> 3 cans of baked beans    
            <input type=radio name="food" value="for corn"> 5 ears of corn
            <input type=radio name="food" value="to bring food"> other: (Be sure to bring enough for 10 servings)<br/><br/>
            <br/>
            <div>Drinks:</div> 
            <br/>
            <input type=radio name="drink" value="for water jugs"> 2 galons of water     
            <input type=radio name="drink" value="for a 24pk"> 24 pack of water     
            <input type=radio name="drink" value="to bring drinks"> other: (Be sure to bring enough for 20 servings)<br/><br/>
            <br/>
            <div>Snacks/Dessert:</div> 
            <br/>
            <input type=radio name="snack" value="for chips"> 2 large bags of chips      
            <input type=radio name="snack" value="for fruit"> 10 friuts (or 3 cans of fruit)     
            <input type=radio name="snack" value="to bring some snacks"> other: (Be sure to bring enough for 10 servings)<br/><br/>
            
            <br/>

            <div1>Comments:</div1> 
            <input type="textarea" name="Comment" rows=7 cols=60></textarea>
            <input type="submit" value="Submit"/>
            
            <br/><br/><br/>
            
            <div3>Feedback:</div3>
            <br/>

            <?php
                if(empty($_GET["FirstName"]) || empty($_GET["LastName"])) 
                {
                    echo "Both first and last names are required <br/><br/>";
                }
                else 
                    echo "Thanks for entering your name!<br/><br/>";
                    
                if(empty($_GET["Email"])) 
                {
                    echo "Email address is required!<br/><br/>";
                }
                else
                {
                    echo "Okay! We've got your email address on file now.<br/>We'll let you know if there are any updates.<br/><br/>" ;
                }
                
                if(!isset($_GET["amtGuests"])) 
                {
                    echo "Amount of guests must be accounted for. <br/><br/>";
                }
                else 
                {
                    switch($_GET["amtGuests"])
                    {
                        case 0: echo "No guests<br/><br/>";
                                break;
                        case 1: echo "You will be bringing one guest.<br/>Please bring extra food and drinks.<br/><br/>";
                                break;
                        case 2: echo "You will be bringing two guests.<br/>Please bring double of everything you sign up for.<br/><br/>";
                                break;
                    }
                }
                
                

                if(empty($_GET["drink"])) 
                {
                    echo "You must sign up for a drink. <br/><br/>";
                }
                else 
                    echo "Thanks for signing up " . $_GET["drink"] . "!<br/><br/>";
                    
                if(empty($_GET["food"])) 
                {
                    echo "You must sign up for a food. <br/><br/>";
                }
                else 
                    echo "Thanks for signing up " . $_GET["food"] . "!<br/><br/>";
                
                if(empty($_GET["snack"])) 
                {
                    echo "You must sign up for a snack or dessert. <br/><br/>";
                }
                else 
                    echo "Thanks for signing up " . $_GET["snack"] . "!<br/><br/>";
                
                if(isset($_GET["Comment"]))
                {
                    echo "We'll be sure to get back to you regarding your comment.<br/><br/>";
                }
            ?>
        </form>
    </body>
</html>