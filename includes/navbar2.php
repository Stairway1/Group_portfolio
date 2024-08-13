<?php function getCurrentPageName() {
    $currentPage = basename($_SERVER['SCRIPT_NAME'], '.php');
    
    $currentPage = str_replace('_', ' ', $currentPage);
    $currentPage = ucwords($currentPage);
    
    return $currentPage;
}

// Get the current page name
$currentPageName = getCurrentPageName();
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a class="text-white" href=""><?php echo htmlspecialchars($currentPageName);?></a></li>
    </ol>
</nav>