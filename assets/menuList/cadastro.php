<?php
$menu_options = array(
    array(
        'title' => 'Cliente',
        'url' => '#'
    ),
    array(
        'title' => 'Fornecedor',
        'url' => '#'
    ),
    array(
        'title' => 'Usuário',
        'url' => '#'
    )
);


array_push($menu_options, array('title' => 'Produtos', 'url' => '#'));
array_push($menu_options, array('title' => 'Perfil de acesso', 'url' => '#'));

usort($menu_options, function($a, $b) {
    return strcmp($a["title"], $b["title"]);
});

echo '<ul class="sub-menu">';
foreach ($menu_options as $option) {
    echo '<li><a href="' . $option['url'] . '">' . $option['title'] . '</a></li>';
}
echo '</ul>';
?>
