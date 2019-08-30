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
