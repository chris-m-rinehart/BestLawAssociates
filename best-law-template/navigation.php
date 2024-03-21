<?php
// Define navigation items
$navItems = [
    ['text' => 'About', 'link' => '/best-law-template/about.php'],
    ['text' => 'Practice Areas', 'subItems' => [
        ['text' => 'Naturalization', 'link' => '#'],
        ['text' => 'Family Based', 'link' => 'https://bestlawassociates.com/family-based/'],
        ['text' => 'Asylums', 'link' => 'https://bestlawassociates.com/asylums/'],
        ['text' => 'SIJ\'s', 'link' => 'https://bestlawassociates.com/s-i-j/'],
        ['text' => 'U/T Visas', 'link' => 'https://bestlawassociates.com/u-and-t/'],
        ['text' => 'Waivers', 'link' => 'https://bestlawassociates.com/waivers/']
    ]],
    ['text' => 'Contact', 'link' => 'https://bestlawassociates.com/contact/'],
    ['text' => 'News', 'link' => 'https://bestlawassociates.com/news/'],
    ['text' => 'LGBTQ Families & Immigration', 'link' => 'https://bestlawassociates.com/lgbtq-families/'],
    ['text' => 'Court Information Checker', 'link' => 'https://acis.eoir.justice.gov/en/', 'target' => '_blank', 'rel' => 'noopener noreferrer']
];
?>

<nav class="nav" id="header">
    <div class="container">
        <h1 class="logo"><img src="/assets/images/logo.png" alt="Company Logo"></h1>
        <ul>
            <?php foreach ($navItems as $item): ?>
                <li>
                    <a href="<?= $item['link'] ?>" <?= isset($item['target']) ? 'target="' . $item['target'] . '"' : '' ?> <?= isset($item['rel']) ? 'rel="' . $item['rel'] . '"' : '' ?>>
                        <?= $item['text'] ?>
                    </a>
                    <?php if (isset($item['subItems'])): ?>
                        <ul class="sub-menu">
                            <?php foreach ($item['subItems'] as $subItem): ?>
                                <li><a href="<?= $subItem['link'] ?>"><?= $subItem['text'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>
