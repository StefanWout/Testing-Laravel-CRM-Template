# Asset Migration Instructions

## Copy Duralux Template Assets

To complete the setup, copy the following files from your Duralux template to the Laravel public folder:

### CSS Files
Copy from `duralux-admin/assets/css/` to `public/assets/css/`:
- bootstrap.min.css
- theme.min.css

### JavaScript Files
Copy from `duralux-admin/assets/js/` to `public/assets/js/`:
- common-init.min.js
- dashboard-init.min.js
- theme-customizer-init.min.js

### Vendor Files
Copy from `duralux-admin/assets/vendors/` to `public/assets/vendors/`:
- css/vendors.min.css
- css/daterangepicker.min.css
- js/vendors.min.js
- js/daterangepicker.min.js
- js/apexcharts.min.js
- js/circle-progress.min.js

### Images
Copy from `duralux-admin/assets/images/` to `public/assets/images/`:
- All logo files (logo-full.png, logo-abbr.png)
- All avatar images
- favicon.ico (to `public/` root)

## Command Line Copy (PowerShell)
If your template is at a specific location, you can use:
```powershell
# Example: Copy assets from template directory
$templatePath = "C:\path\to\duralux-admin"
$publicPath = ".\public"

Copy-Item "$templatePath\assets\*" "$publicPath\assets\" -Recurse -Force
```
