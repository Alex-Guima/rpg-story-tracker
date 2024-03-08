package com.rpgstorytracker.exceptions;

import java.util.UUID;

public class CampaignNotFoundException extends RuntimeException {
  public CampaignNotFoundException(UUID campaignId) {
    super("Campaign with id: " + campaignId + "Not Found");
  }
}
