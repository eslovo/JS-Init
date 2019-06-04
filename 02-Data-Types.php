<?php
/**
 * Created by Vitaly Lebedev
 * Email: eslovo@gmail.com
 * Date: 04.06.2019
 * Time: 16:13
 */
include_once dirname(__FILE__).'/layout/header.php';

?>

    <div class="w3-container w3-teal">
        <h1>Data Types</h1>
    </div>

    <div class="w3-container">

        <p>Data types are the classifications we give to the different kinds of data that we use in programming. In JavaScript, there are seven fundamental data types:</p>
        <ul class="w3-ul" style="width:100%">
            <li><strong>Number</strong>: Any number, including numbers with decimals: <span class="w3-tag w3-blue-gray">4</span>,
                <span class="w3-tag w3-blue-gray">8</span>, <span class="w3-tag w3-blue-gray">1516</span>, <span
                    class="w3-tag w3-blue-gray">23.42</span>.</li>
            <li><strong>String</strong>: Any grouping of characters on your keyboard (letters, numbers, spaces, symbols, etc.) surrounded by single quotes:
                <span class="w3-tag w3-blue-gray">' ... '</span> or double quotes <span class="w3-tag w3-blue-gray">" ... "</span>. Though we prefer single quotes. Some people like to think of string as a fancy word for text.</li>
            <li><strong>Boolean</strong>: This data type only has two possible values— either <span
                    class="w3-tag w3-blue-gray">true</span> or <span class="w3-tag w3-blue-gray">false</span> (without quotes). It’s helpful to think of booleans as on and off switches or as the answers to a “yes” or “no” question.</li>
            <li><strong>Null</strong>: This data type represents the intentional absence of a value, and is represented by the keyword
                <span class="w3-tag w3-blue-gray">null</span> (without quotes).</li>
            <li><strong>Undefined</strong>: This data type is denoted by the keyword <span class="w3-tag w3-blue-gray">undefined</span> (without quotes). It also represents the absence of a value though it has a different use than
                <span class="w3-tag w3-blue-gray">null</span>.</li>
            <li><strong>Symbol</strong>: A newer feature to the language, symbols are unique identifiers, useful in more complex coding. No need to worry about these for now.</li>
            <li><strong>Object</strong>: Collections of related data.</li>
        </ul>

        <p>The first 6 of those types are considered primitive data types. They are the most basic data types in the language. Objects are more complex, and you’ll learn much more about them as you progress through JavaScript. At first, seven types may not seem like that many, but soon you’ll observe the world opens with possibilities once you start leveraging each one. As you learn more about objects, you’ll be able to create complex collections of data.</p>

    </div>
<?php

include_once dirname(__FILE__).'/layout/footer.php';