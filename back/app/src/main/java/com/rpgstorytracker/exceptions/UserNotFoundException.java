package com.rpgstorytracker.exceptions;

import java.util.UUID;

/**
 * UserNotFoundException
 */
public class UserNotFoundException extends RuntimeException {
  public UserNotFoundException(UUID userId) {
    super("The User with id " + userId + " doesn't exist");
  }
}
