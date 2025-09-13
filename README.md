# PHPBanglaDate

**PHPBanglaDate** is a lightweight, accurate, and user-friendly PHP library designed to convert English timestamps into Bangla dates, months, and years.  
Developed by **Nabil Bin Billal** to provide a dependable solution for developers working with Bangla calendars.

---

## Why I Made This Library

Finding a reliable Bangla date library for PHP was a hassle. Most existing solutions were either inaccurate, failed to handle leap years correctly, or were overly complicated. Frustrated by this, I created **PHPBanglaDate** to offer a **free, precise, and simple-to-use library** for everyone. This library ensures accuracy, including proper leap year calculations, and integrates seamlessly into any PHP project.

---

## Features

- Converts English timestamps to Bangla date, month, and year
- Correctly handles **leap years**
- Customizable date change hour (default: 6 AM)
- No external dependencies
- Includes **pre-built demo designs** for quick integration
- Simple and intuitive API

---

## Installation

### Option 1: Via Composer (Recommended)
```bash
composer require nabilbinbillal/php-bangla-date
```

### Option 2: Manual Installation
1. Clone or download the repository:
   ```bash
   git clone https://github.com/nabilbinbillal/PHPBanglaDate.git
   ```
2. Include the library in your project:
   ```php
   require_once 'path/to/PHPBanglaDate.php';
   ```

---

## Usage

### Basic Example
```php
<?php
require_once 'PHPBanglaDate.php';

// Initialize with current timestamp
$banglaDate = new PHPBanglaDate(time());

// Get Bangla date components
list($date, $month, $year) = $banglaDate->get_date();

// Output the result
echo "Today’s Bangla Date: $date $month $year";
?>
```

### Advanced Example
Customize the date change hour (e.g., set to midnight instead of 6 AM):
```php
$banglaDate = new PHPBanglaDate(time(), 0); // Date change at midnight
list($date, $month, $year) = $banglaDate->get_date();
echo "Bangla Date: $date $month $year";
```

---

## Demo Designs

The repository includes three stylish demo designs to showcase the library’s functionality:

1. **Minimal Card** (`demos/demo1.php`): A clean, modern card layout.
2. **Colorful Banner** (`demos/demo2.php`): A vibrant, eye-catching banner.
3. **Glassmorphism UI** (`demos/demo3.php`): A trendy glassmorphism-inspired design.

### Running the Demos
1. Set up a local server (e.g., XAMPP, WAMP, or PHP’s built-in server):
   ```bash
   php -S localhost:8000
   ```
2. Navigate to the `demos/` folder in your browser (e.g., `http://localhost:8000/demos/demo1.php`).

---

## File Structure

```
PHPBanglaDate/
│
├── PHPBanglaDate.php       <-- Main library file
├── example_Usage.php       <-- Simple usage example
├── demos/                  <-- Folder for demo designs
│   ├── demo1.php
│   ├── demo2.php
│   └── demo3.php
├── README.md
└── LICENSE
```

---

## Requirements

- PHP 7.4 or higher
- No external dependencies

---

## License

This project is licensed under the [MIT License](LICENSE). You are free to use, modify, and distribute this library, provided you retain credits to **Nabil Bin Billal**.

---

## Contributing

We welcome contributions! To contribute:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Commit your changes (`git commit -m 'Add your feature'`).
4. Push to the branch (`git push origin feature/your-feature`).
5. Open a Pull Request.

---

## Credits

- **Author**: Nabil Bin Billal
- **GitHub**: [github.com/nabilbinbillal](https://github.com/nabilbinbillal)
- **Motivation**: To address the lack of a reliable, free Bangla date library for PHP developers.

Thank you for using **PHPBanglaDate**! I hope it saves you the trouble I faced. If you find it helpful, please star the repository or share it with others!

---

## Contact

For questions, bug reports, or suggestions, open an issue on [GitHub](https://github.com/nabilbinbillal/PHPBanglaDate/issues) or email me at [nabilbinbillal@gmail.com](mailto:nabilbinbillal@gmail.com).
