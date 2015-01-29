@core

Feature: Card

  Fonctionnement du panier

  Scenario: initialize card to start with empty card
    Given An empty card
    Then the card price is 0 euro
