package com.rpgstorytracker.controllers;

import java.util.UUID;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;

import com.rpgstorytracker.exceptions.CampaignNotFoundException;
import com.rpgstorytracker.models.Campaign;
import com.rpgstorytracker.repositories.CampaignRepository;

/**
 * CamapaignController
 */
public class CampaignController {
  private final CampaignRepository campaignRepository;

  public CampaignController(CampaignRepository campaignRepository) {
    this.campaignRepository = campaignRepository;
  }

  @GetMapping("user/{userId}/campaign/{campaignId}")
  public Campaign getCampaign(@PathVariable UUID campaignId) {
    return campaignRepository.findById(campaignId).orElseThrow(() -> new CampaignNotFoundException(campaignId));
  }
}
