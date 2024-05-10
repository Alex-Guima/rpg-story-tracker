package main

import (
	"github.com/Alex-Guima/rpg-story-tracker/internal/api"
	"github.com/Alex-Guima/rpg-story-tracker/internal/config"
)

func main() {
	config.InitConfig()
	api.StartServer()
}
