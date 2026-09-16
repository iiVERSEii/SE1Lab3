# AI Usage Log

**Platform:** Visual Studio Code with GitHub Copilot  
**Model:** GitHub Copilot

---

## Interaction 1

### User

1. HTML profiles Create a profile page that is styled with CSS. Have fun
with this! In this page, you must include some text, a photo, a hyper link and a
video.

### Assistant Summary

Replaced the basic index page with a styled responsive profile page containing text, an image, hyperlinks, and an embedded video. Validated the HTML and reported that the browser preview could not be opened because the tool call was cancelled.

---

## Interaction 2

### User

can you explain how to do this I've never used html

### Assistant Summary

Explained common HTML tags, provided a beginner-friendly profile-page example with embedded CSS, and described how to save and open the page in a browser.

---

## Interaction 3

### User

lets make it a little simpler and about me

### Assistant Summary

Checked the reverted file and replaced it with a simpler About Me page containing easy-to-edit placeholders, a photo, a hyperlink, a video, and basic CSS. Validated the file.

---

## Interaction 4

### User

how can i make this page a little prettier and then make the practice1 be a link to the profile page

### Assistant Summary

Reviewed the existing project, improved the index page with a gradient background and styled links, created practice1.html as the profile page, and connected the Practice 1 link to it. Validated both files.

---

## Interaction 5

### User

how do i replace the image

### Assistant Summary

Explained how to replace the image URL with a direct online image URL or a local image file placed in the project folder, including how to update the alt text and image dimensions.

---

## Interaction 6

### User

https://upload.wikimedia.org/wikipedia/commons/9/90/Kansas_Jayhawks_1946_logo.svg?utm_source=en.wikipedia.org&utm_campaign=imageinfo&utm_content=original

is this good

### Assistant Summary

Confirmed that the Wikimedia URL points to a direct image and provided the corresponding img element with descriptive alt text.

---

## Interaction 7

### User

how do i make the image not a circle

### Assistant Summary

Explained that border-radius: 50% creates a circle and suggested using a smaller radius for rounded corners or zero for a rectangle.

---

## Interaction 8

### User

why won

### Assistant Summary

Checked the current CSS, explained that the image already used border-radius: 8px, and suggested saving the file, hard-refreshing the browser, checking the correct tab, and searching for any remaining 50% rule.

---

## Interaction 9

### User

why won't the video play

### Assistant Summary

Identified that the iframe used a regular YouTube watch URL instead of an embed URL, then changed it to the /embed/ format and validated the page.

---

## Interaction 10

### User

CSS Font Control Create a web page that has a paragraph with some
dummy text. Near the paragraph, have a text field to accept RGB values to form
any colors for the paragraph and the border. You also need to control the width
of the border

### Assistant Summary

Created practice2.html with dummy text, RGB number inputs for paragraph and border colors, an Apply button, a border-width slider, and responsive styling. Validated the page.

---

## Interaction 11

### User

JavaScript Password Verification Create a JavaScript program that
allows the user to enter a password two times to verify them. If the password is
not at least eight characters long or if two passwords are different, alert the
user. Otherwise, tell the user that two passwords are matched.

### Assistant Summary

Created practice3.html with two password fields and JavaScript that alerts for passwords shorter than eight characters, mismatched passwords, or successful matching passwords. Validated the page.

---

## Interaction 12

### User

PHP Multiplication Table Create a PHP program that receives a num-
ber and displays a multiplication table from 1 to the number. You also need to
print the row and column indexes in the table.

### Assistant Summary

Created practice4.php with a number input, PHP-generated row and column indexes, multiplication results, styling, and a link back to the home page. Updated index.html to link to the PHP page and validated both files.

---

## Interaction 13

### User

how do i open it

### Assistant Summary

Attempted to start PHP’s built-in server, found that PHP was not installed, and explained how to use XAMPP or install PHP before opening the PHP page through localhost.

---

## Interaction 14

### User

is there a way to do it internally

### Assistant Summary

Explained that PHP requires an interpreter and cannot run through Live Server alone, then contrasted installing PHP with converting the page to JavaScript and HTML.

---

## Interaction 15

### User

can i install an interpreter

### Assistant Summary

Checked for Windows Package Manager, found the PHP package, installed PHP 8.4, verified the interpreter, started the local PHP server, and opened the multiplication-table page at localhost.

---

## Interaction 16

### User

will that run on the website?

### Assistant Summary

Explained that the PHP page will run on a website only when the hosting server supports PHP, and that localhost works only on the user’s computer while GitHub Pages does not execute PHP.

---

## Interaction 17

### User

go through all of SE1Lab3 and comment as necessary

### Assistant Summary

Reviewed all five lab pages and added concise educational comments explaining the main HTML, CSS, JavaScript, and PHP logic without changing visible behavior. Validated every file.

---

## Interaction 18

### User

follow the instructions in that log

### Assistant Summary

Read the AI usage log instructions and generated this ai_usage_log.md file containing the available user messages verbatim and concise summaries of the corresponding assistant responses.
