# Blackjack

This is a class exercise created by our coach [Lambelin Rafael](https://github.com/rafaello104)

I follow this exercises during my training as JuniorWeb Developer at BeCode in jun 2019.

## Objective

The main purpose of the exercise is to get familiar with classes.

## Blackjack Rules

- Cards are between 1-11 points.
- Getting more than 21 points, means that you lose.
- Getting 21 points with your first two cards, means you have a blackjack.
- To win, you need to have more points than the dealer, but not more than 21.
- The dealer is obligated to keep taking cards until they have at least 15 points.

## Description

- In the `blackjack.php` file I created a class called `Blackjack` with 3 methods: `hit`, `stand` and `surrender`.

* `hit` adds a card between 1-11.
* `stand` ends the player's turn and start the dealer's turn (player's points is saved).
* `surrender` makes the player surrender the game. (Dealer wins.)
* The `score` property keeps the player's score at all times.
* The button on `index.php` starts the game when pushed and goes to `game.php`.
* On `game.php` the Blackjack class is instantiated twice and saved in the session.
* I used the forms from `index.php` to send to the `game.php` page what the player's action is. ( hit/stand/surrender)
* I used the class' methods to react to these actions in a switch statement.
* The final result is based on the following logic:
  - When the player `hit` the server draws a card between 1-11, and add it to his total score.
  - If the player reaches >21, then the message `You lose!` is displayed.
  - If the player stands before that, the dealer starts drawing cards until he reaches >15.
  - The server checks the difference between the playr's result and that of the dealer.
  - The person with the biggest score (that is still lower than 22) wins the hand (If equal the dealer wins).
  - At any point the player is able to click`surrender` after which the message `You lose!` is diplayed and simulates the dealer's score
