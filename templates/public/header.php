<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanpur Classic | <?php echo "$home"?></title>
    <link type="text/css"  rel="stylesheet" href="../assets/css/header.css">
    <link type="text/css"  rel="stylesheet" href="../assets/css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav id="navbar" class="p-2">
        <div class="container d-flex align-items-center">
            <!-- main logo -->
            <img src="../../main_logo.png" alt="Kanpur Classic" class="navbar-brand" height="60">
            <!-- search bar -->
            <div class="d-none d-md-flex border w-100">
                <form id="searchForm" action="" class="d-flex w-100 align-items-center">
                    <input type="search" style="outline: none;" class="px-2 w-100 py-1 border" placeholder="Search for products">
                    <button type="submit" class="d-flex px-2 py-1 border align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search me-2" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                          </svg>
                          <span>Search</span>
                    </button>
                </form>
            </div>
            
            <!-- user tabs -->
            <div id="user" class="d-flex align-items-center">
                <span class="d-flex border mx-3 px-2 py-1 position-relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill-add me-md-2" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                      </svg>
                      <span class="d-none d-md-flex">Login</span>
                      <span class="badgeAlert position-absolute rounded-pill badge bg-dark">2+</span>
                </span>
                <span class="d-flex border px-2 me-3 py-1 position-relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-heart me-lg-2" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                      </svg>
                      <span class="d-none d-lg-flex">WishList</span>
                      <span class="position-absolute rounded-pill badge badgeAlert bg-dark">2+</span>
                </span>
                <span class="d-flex border me-3 px-2 py-1 position-relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart me-lg-2" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                      </svg>
                      <span class="d-none d-lg-flex">Cart</span>
                      <span class="position-absolute rounded-pill badge badgeAlert bg-dark">2+</span>
                </span>
            </div>
        </div>


        <!-- search be for small devices -->
        <div class="container d-flex align-items-center px-0">
            <!-- small device search bar -->
            <div class="d-flex d-md-none border w-100">
                <form id="searchForm" action="" class="d-flex w-100 align-items-center">
                    <input style="outline: none;" type="search" class="px-2 w-100 py-1 border" placeholder="Search for products">
                    <button type="submit" class="d-flex px-2 py-1 border align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search me-2" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                          </svg>
                          <span>Search</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>