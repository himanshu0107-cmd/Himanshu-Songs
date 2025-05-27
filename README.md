

This project is a fun and interactive web application that displays lyrics with a balloon animation effect. Users can also send personalized messages through a separate page. I made this specially for my angry girlfriend. 

## Features

- **Lyrics Display**: Lyrics are displayed with a fade or typing effect based on the timing.
- **Balloon Animation**: Balloons float up the screen and can be popped to trigger a confetti effect.
- **Personalized Messages**: Users can send personalized messages through a form.

## About Sending Mails 

You can use EmailJS to enable the email-sending feature. Currently, I've implemented a PHP mailer, which is a straightforward solution but requires a hosting provider with PHP mailing services enabled. To support a purely static front-end setup, I plan to update the integration to use EmailJS.

## Setup

1. **Clone the repository**:
    ```sh
    
    ```

2. **Open the project**:
    Open the `index.html` file in your preferred web browser.

## File Structure

- `index.html`: Main page displaying the lyrics and balloon animations.
- `message.html`: Page for sending personalized messages.
- `css/style.css`: Styles for the application.
- `js/script.js`: JavaScript for handling lyrics display and balloon animations.
- `js/message.js`: JavaScript for handling the personalized messages form.

## Usage

1. **Start the Application**:
    - Open `index.html` in your browser.
    - Click the music icon button to start the lyrics and balloon animations.

2. **Send a Message**:
    - Navigate to `message.html`.
    - Fill out the form with your name and message, then click "Send Message".

## Customization

- **Lyrics**: Modify the `lyricsData` array in `script.js` to change the lyrics and their timings.
- **Balloon Colors**: Adjust the color generation logic in `createBalloon` function in `script.js`.
- **Styles**: Customize the appearance by editing `style.css`.

## Dependencies

- [Google Fonts](https://fonts.google.com/): Poppins and Fredoka One fonts.
- [Font Awesome](https://fontawesome.com/): For the music icon.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgements

- Inspired by various interactive web animations and lyric display projects.
- Special thanks to the creators of the libraries and tools used in this project.

Feel free to contribute to this project by submitting issues or pull requests. Enjoy the interactive experience!
