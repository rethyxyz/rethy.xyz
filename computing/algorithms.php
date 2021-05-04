<!DOCTYPE html>
<html>
    <head>
        <?php include 'header.php';?>
        <title>Algorithms - rethy.xyz</title>
    </head>

<body>
<div class="main">

<h1>Algorithms <small>(sorted alphabetically)</small></h1>
<br>

<!--			
<h2>Bubble Sort</h2>
-->

<!--			
<h2>Merge Sort</h2>
<p>
<a href="files/merge_sort.gif"><img src="../files/merge_sort.gif"></a>
<br />
(By <a href="https://commons.wikimedia.org/w/index.php?title=User:Swfung8&action=edit&redlink=1" class="new" title="User:Swfung8 (page does not exist)"&gt;Swfung8</a&gt; - <span class="int-own-work" lang="en"&gt;Own work</span&gt;, <a href="https://creativecommons.org/licenses/by-sa/3.0" title="Creative Commons Attribution-Share Alike 3.0">CC BY-SA 3.0</a>, <a href="https://commons.wikimedia.org/w/index.php?curid=14961648">Link</a>)
</p>
-->

<!--			
<h2>Binary Search</h2>
<p>
<a href="files/binary_search.svg"><img src="files/binary_search.svg"></a>
<br />
<small><a href="https://commons.wikimedia.org/wiki/File:Binary_search_example_tree.svg#/media/File:Binary_search_example_tree.svg">Image taken from here.</a> Created by: <a href="https://commons.wikimedia.org/w/index.php?title=User:Esquivalience&action=edit&redlink=1">Esquivalience</a></small>
</p>
<p>
It is, quite simply put, a search to see if something is true or false, hence binary, meaning 0 (false) and/or 1 (true).
Something such as sending a query to see if an item is, or isn't, in stock.
</p>
<h3>Typical Binary Search Operations</h3>
<p>

</p>
-->

<h2>Quick Sort</h2>
<p> 
<a href="files/quick_sort.gif"><img src="files/quick_sort.gif"></a>
<br />
<small>(By <a href="https://en.wikipedia.org/wiki/User:RolandH" class="extiw" title="en:User:RolandH">en:User:RolandH</a>, <a href="http://creativecommons.org/licenses/by-sa/3.0/" title="Creative Commons Attribution-Share Alike 3.0">CC BY-SA 3.0</a>, <a href="https://commons.wikimedia.org/w/index.php?curid=1965827">Link</a>)</small>
</p>
<p>
Basically, the Quick Sort algorithm is named Quick Sort because it's quick (duh).
</p>
<p>
Unlike other algorithms (like bubble sort, <a href="https://www.youtube.com/watch?v=DaPJkYo2quc">bogosort</a> (my personal favorite)), the Quick Sort algorithm is speedy due to it's operation using a sort of <i>divide and conquer</i> method.
A typical Quick Sort algorithm organizes data into two sub-groups, being items greater and items lower than.
The number placement is decided through a comparison using a pivot number (which is <b>usually</b> the last number in the list, but can differ from method to method and programmer to programmer (it's the last number in my version)).
</p>

<h3>Typical Quick Sort Operations</h3>
<ul>
<li>Get the total length of the <b>sequence</b> of numbers</li>
<ul>
<ul>
<li>Check if the <b>sequence</b> <b>is</b> less than <b>one</b>... if so, return the <b>sequence</b> and exit the program (This is for error checking, and will return the list if it's a single number, as you won't need to sort it)</li>
</ul>
</ul>
<li>Take the last index of the <b>sequence</b> and place into new var named <b>pivot</b></li>
<li>Start a loop to run through the <b>sequence</b></li>
<ul>
<li>Check if the item in the <b>sequence</b> is <b>greater</b> than the <b>pivot</b> number, if so, place into a <b>new</b> list named <b>items_greater</b>. If not, check if the item in the <b>sequence</b> is <b>lower</b> than the <b>pivot</b> number, if so, place into a <b>new</b> list named <b>items_lower</b></li>
</ul>
<li>Finally, output and concatinate the lists items_lower, <b>pivot</b>, and quick_sort</li>
</ul>
<p> Here's my code example... written in Python 3.x:
<br />
<br />
<code>
<indent><b>def</b> <font_green>quick_sort</font_green>(sequence):</indent> <br />
<indent_2>items_greater = []</indent_2>
<br />
<indent_2>items_lower = []</indent_2>
<br />
<br />
<indent_2>length = <font_green>len</font_green>(sequence)</indent>
<br />
<indent_2><font_blue>#this means dip out if nothing was given</font_blue></indent>
<br />
<indent_2><b>if</b> (length <= <font_green>1</font_green>): </indent_2>
<br />
<indent_3><b>return</b> sequence</indent_3>
<br />
<indent_2><b>else:</b></indent_2> 
<br />
<indent_3><font_blue>#pop removes, or "pops" out, if you will, the last item in a list</font_blue></indent_3>
<br />
<indent_3>pivot = sequence.pop()</indent_2> 
<br />
<indent_2><b>for</b> x <b>in</b> sequence:</indent_2> 
<br />
<indent_3><b>if</b> (x > pivot):</indent_3> 
<br />
<indent_4>items_greater.append(x)</indent_4> 
<br />
<indent_3><b>else</b>:</indent_3> 
<br />
<indent_4>items_lower.append(x)</indent_4> 
<br />
<indent_2><b>return</b> quick_sort(items_lower) + [pivot] + quick_sort(items_greater)</indent_2>
<br />
<br />
<indent>def <font_green>main</font_green>():</indent>
<br />
<indent_2>sequence = [<font_blue>1, 20, 1882, 85, 33, 2039, 1287319823, 1293801298301298390, 5893495, 3, 7, 324636, 123, 2, 1293, 93, 1001203</font_blue>]</indent_2>
<br />
<br />
<indent_2>print(<font_blue>"Before:"</font_blue>, sequence)</indent_2>
<br />
<indent_2>print(<font_blue>"After:"</font_blue>, quick_sort(sequence))</indent_2>
<br />
<br />
<indent>main()</indent>
</code>
</p>
<br>

<h1>Disclaimer</h1>
<p>I am an autodidact. I have no real <i>"formal"</i> educational background in Mathematics/Computer Science. Therefore, most, if not all, of the variable names/terms I use during the explanations are not necessarily the truest translation of any arithmetic formulas. My explanations are to make the individual algorithms easy and simple to comprehend, not so much for the theoretical portion of it (there is still a bit, though).</p>
</div>

    <?php include 'footer.php';?>

</body>
</html>
