<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.admin-head')
</head>
<body>
    <div class="dashboard-main-wrapper">
        @include('layouts.admin-header')
        @include('layouts.admin-aside')

        <div class="dashboard-wrapper">
            @include('layouts.admin-section')
            @include('layouts.admin-footer')
        </div>
    </div>

    @include('layouts.admin-scripts')
</body>
</html>