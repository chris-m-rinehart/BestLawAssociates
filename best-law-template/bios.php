<?php
// Define bio data
$bios = [
    [
        'name' => 'Joseph Best',
        'title' => 'Director',
        'image' => '/assets/images/employees/josephbest.jpg',
        'bio' => 'Joseph Best is licensed to practice law in Massachusetts and Pennsylvania...'
    ],
    [
        'name' => 'Kadijah Turay Sengova',
        'title' => 'Associate Attorney',
        'image' => '/assets/images/employees/kadijah-turay-sengova.jpg',
        'bio' => 'Kadijah Turay-Sengova, Esq. joined Best & Associates, LLP after working for a large health insurer for over 20 years...'
    ]
];
?>

<?php foreach ($bios as $bio): ?>
    <div class="bio">
        <img src="<?= $bio['image'] ?>" alt="<?= $bio['name'] ?>" class="bio-image">
        <div class="bio-text">
            <h3><?= $bio['name'] ?></h3>
            <h4><?= $bio['title'] ?></h4>
            <p><?= $bio['bio'] ?></p>
        </div>
    </div>
<?php endforeach; ?>
