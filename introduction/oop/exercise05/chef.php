<?php 
    class Chef {
        function makeChicken() {
            echo 'The chef is making chicken...<br>';
        }

        function makeSalad() {
            echo 'The chef is making salad...<br>';
        }

        function makeSpecialDish() {
            echo 'The chef is making a special dish...<br>';
        }
    }

    class ItalianChef extends Chef {
        function makeSpecialDish() {
            //Overriding makeSpecialDish() from Chef class.
            echo 'The italian chef is making a special dish...<br>';
        }

        function makePasta() {
            echo 'The chef is making pasta...<br>';
        }
    }
?>