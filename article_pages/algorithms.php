<!DOCTYPE html>
<html>
	<head>
        <?php include "head.php"; ?>
		<title>Algorithms - Brody Rethy</title>
	</head>

	<body>
		<div class="menu">
			<?php include "menu.php"; ?>
		</div>

        <br>

		<div class="main">
            <h1>Disclaimer</h1>
            <p>
            I do not have a <i>"formal"</i> educational background in Mathematics, therefore most, if not all, of the variable names I use during the explanations are not true to the original mathematical equations and are instead made to be easy to understand.
            The purpose of my explanations are to be able to comprehend how each algorithm works, not so much the theory of them (there is still a bit, though).
            </p>
            <hr>
            <h1>Algorithms <small>(sorted alphabetically)</small></h1>
                <h2>Bubble Sort</h2>
                <img src="../files/construction.gif">

                <h2>Merge Sort</h2>
                <img src="../files/construction.gif">
                <p>
                    <a href="../files/merge_sort.gif"><img src="../files/merge_sort.gif"></a>
                    <br>
                    (By <a href="https://commons.wikimedia.org/w/index.php?title=User:Swfung8&action=edit&redlink=1" class="new" title="User:Swfung8 (page does not exist)"&gt;Swfung8</a&gt; - <span class="int-own-work" lang="en"&gt;Own work</span&gt;, <a href="https://creativecommons.org/licenses/by-sa/3.0" title="Creative Commons Attribution-Share Alike 3.0">CC BY-SA 3.0</a>, <a href="https://commons.wikimedia.org/w/index.php?curid=14961648">Link</a>)
                </p>

                <h2>Quick Sort</h2>
                <p>
                    <a href="../files/quick_sort.gif"><img src="../files/quick_sort.gif"></a>
                    <br>
                    (By <a href="https://en.wikipedia.org/wiki/User:RolandH" class="extiw" title="en:User:RolandH">en:User:RolandH</a>, <a href="http://creativecommons.org/licenses/by-sa/3.0/" title="Creative Commons Attribution-Share Alike 3.0">CC BY-SA 3.0</a>, <a href="https://commons.wikimedia.org/w/index.php?curid=1965827">Link</a>)
                </p>
                <p>
					Unlike other algorithms (bubble sort, <a href="https://www.youtube.com/watch?v=DaPJkYo2quc">bogosort</a>), the quick sort algorithm is speedy due to it's operation using the "divide and conquer" method.
                    Quick sort organizes data into two sub-groups, being items greater and items lower.
                    The number placement is decided through a comparison using the pivot point (which is <b>usually</b> the last number in the list, but can differ from method to method (it's the last number in my example)).
                    Basically, the quick sort algorithm is named quick sort because it's quick (duh).
                </p>
                    Quick sort works like this:
                    <ol>
                        <li>Get total length of sequence (a sequence is just a group of numbers)</li>
                        <ol>
                            <li>This will be used to error check</li>
                            <ol>
                                <li><b>If</b> the sequence <b>is</b> less than <b>one</b>, return sequence (you don't need to sort a single index)</li>
                            </ol>
                        </ol>
                        <li>Take last index of sequence and place into new var named <b>pivot</b></li>
                        <li>Start for loop and to run through sequence</li>
                        <ol>
                            <li>Check if item in sequence is <b>greater</b> than pivot, if so, place into <b>new</b> list named <b>items_greater</b></li>
                            <li>Check if item in sequence is lower than pivot, if so, place into <b>new</b> list named <b>items_lower</b></li>
                        </ol>
                        <li>Finally, output and concatinate the lists items_lower, pivot, and quick_sort</li>
                    </ol>
                <p>
                    Here's my example of code written in Python 3.x:
                    <br>
                    <code_block>
                        <indent><b>def</b> <font_green>quick_sort</font_green>(sequence):</indent> <br>
                            <indent_2>items_greater = []</indent_2><br>
                            <indent_2>items_lower = []</indent_2><br>
                            <br>
                            <indent_2>length = <font_green>len</font_green>(sequence)</indent><br>
                            <indent_2><font_blue>#this means dip out if nothing was given</font_blue></indent><br>
                            <indent_2><b>if</b> (length <= <font_green>1</font_green>): </indent_2><br>
                                <indent_3><b>return</b> sequence</indent_3><br>
                            <indent_2><b>else:</b></indent_2> <br>
                                <indent_3><font_blue>#pop removes, or "pops" out, if you will, the last item in a list</font_blue></indent_3><br>
                                <indent_3>pivot = sequence.pop()</indent_2> <br>
                            <indent_2><b>for</b> x <b>in</b> sequence:</indent_2> <br>
                                <indent_3><b>if</b> (x > pivot):</indent_3> <br>
                                    <indent_4>items_greater.append(x)</indent_4> <br>
                                <indent_3><b>else</b>:</indent_3> <br>
                                    <indent_4>items_lower.append(x)</indent_4> <br>
                            <indent_2><b>return</b> quick_sort(items_lower) + [pivot] + quick_sort(items_greater)</indent_2><br>
							<br>
                        <indent>def <font_green>main</font_green>():</indent><br>
                            <indent_2>sequence = [<font_blue>1, 20, 1882, 85, 33, 2039, 1287319823, 1293801298301298390, 5893495, 3, 7, 324636, 123, 2, 1293, 93, 1001203</font_blue>]</indent_2><br>
							<br>
                            <indent_2>print(<font_blue>"Before:"</font_blue>, sequence)</indent_2><br>
                            <indent_2>print(<font_blue>"After:"</font_blue>, quick_sort(sequence))</indent_2><br>
							<br>
                        <indent>main()</indent><br>
                    </code_block>
                </p>
				<p>
					I feel the code is clear, therefore I won't bother to explain it.
                </p>

                <h2>Binary Search</h2>
                <img src="../files/construction.gif">
		</div>

        <br>

        <div class="footer">
			<?php include "footer.php"; ?>
        </div>
	</body>
</html>
