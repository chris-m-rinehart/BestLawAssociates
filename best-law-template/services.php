<?php
// Define service data
$services = [
    ['title' => 'Family Based', 'description' => 'Do you have family in the United States?'],
    ['title' => 'Employment Based', 'description' => 'Do you want to work in the United States?'],
    ['title' => 'Humanitarian Based', 'description' => 'Do you fear persecution or have you been harmed?']
];
?>

<div class="container">
    <h1>Our Practice Areas</h1>
    <div class="cards">
        <?php foreach ($services as $service): ?>
            <div class="card">
                <h2><?= $service['title'] ?></h2>
                <h3><?= $service['description'] ?></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dolor natus eos 
                quam aliquam ut est necessitatibus aliquid alias incidunt?</p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
