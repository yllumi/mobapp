# MobApp

Mobile web application UI template kit based on Bootstrap 5

> This project is still in development and there will still be many changes in the structure and code.


## 🚀 Development Mode (Dev Mode)

To run the project in development mode, use PHP's built-in development server:

```sh
php -S localhost:8080 -t src/
```

This command will start a local server and serve files from the /src/ directory.
You can then access the project at `http://localhost:8080/`

## 📦 Build Static Files

To export the project into static HTML files:

#### 1. Edit pages.txt

Add the paths of the PHP pages you want to build, one per line.
Example:

```bash
index.php
components/index.php
components/listview.php
components/buttons.php
```

#### 2. Run the build script

Execute the following command in the terminal:

```sh
php build.php
```

#### 3. Check the output

- The generated static files will be available in the /dist/ directory.
- PHP files will be converted into .html and all links inside will be updated automatically.

## 📂 Project Structure

```bash
/mobapp
│── /src/               # Development source files
│   ├── index.php
│   ├── /components/    # UI components
│   │   ├── index.php
│   │   ├── listview.php
│   │   ├── buttons.php
│   ├── /partials/      # Reusable parts (header, footer, etc.)
│   │   ├── header.php
│   │   ├── footer.php
│   ├── /assets/        # Static assets (CSS, JS, Images)
│── /dist/              # Built static HTML output
│── pages.txt           # List of PHP files to be built
│── build.php           # Build script
```

## 🔥 Features

- Dev Mode: Easily test changes using php -S localhost:8080 -t src/
- Build Mode: Convert PHP files to static .html
- Automatic Link Conversion: All .php links in the HTML output will be changed to .html
- Asset Copying: The /assets/ folder is automatically copied to /dist/assets/

🔥 Now you're ready to develop and deploy your static mobile app UI!
If you have any issues or suggestions, feel free to improve the project! 🚀
