<?php

require_once __DIR__ . "/vendor/autoload.php";

use League\CommonMark\MarkdownConverter;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\Attributes\AttributesExtension;

$config = [];
$env = new Environment($config);
$env->addExtension(new CommonMarkCoreExtension());
$env->addExtension(new AttributesExtension());
$converter = new MarkdownConverter($env);

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>PHP Markdown</title>
		<link href="/bootstrap/bootstrap.min.css" rel="stylesheet"/>
    </head>
    <body class="container py-5">		
		<?php

		$content = "# PHP Programming Language

Eu mi bibendum neque egestas congue quisque egestas diam in arcu cursus euismod? Neque ornare aenean euismod elementum nisi, quis eleifend quam adipiscing vitae proin sagittis, nisl rhoncus mattis rhoncus.

Tempus egestas sed sed risus pretium quam vulputate dignissim suspendisse in est ante in nibh mauris, cursus mattis molestie a, iaculis at erat pellentesque adipiscing commodo! Adipiscing elit pellentesque habitant morbi tristique senectus et netus et malesuada fames ac. A diam maecenas sed enim ut sem viverra aliquet eget sit amet tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra, magna ac placerat. Viverra vitae congue eu, consequat ac felis donec et odio pellentesque diam? Eget est lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas integer eget aliquet nibh praesent tristique! Nam aliquam sem et tortor consequat id! Massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue? Vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam vestibulum morbi! Sit amet, aliquam id diam maecenas ultricies mi eget mauris pharetra et ultrices. Sit amet, consectetur adipiscing elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris rhoncus aenean. Sollicitudin ac orci phasellus egestas tellus rutrum tellus. Maecenas volutpat blandit aliquam etiam erat velit, scelerisque in dictum non, consectetur a erat nam at lectus urna duis convallis convallis tellus, id interdum velit laoreet id. Purus, in mollis nunc sed id semper risus in hendrerit gravida rutrum quisque non tellus orci, ac auctor augue mauris augue neque, gravida in fermentum et. Blandit cursus risus, at ultrices mi tempus imperdiet nulla!

NOTE: Internet is a connection of computers {.text-muted}
		";

		echo $converter->convert($content);

		?>
	</body>
</html>

