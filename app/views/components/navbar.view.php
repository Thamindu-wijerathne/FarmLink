<div style="background-color: #333; display: flex; align-items: center; justify-content: space-between; padding: 10px 20px;">
    <div style="display: flex; gap: 10px;">
        <?php
            $activeIndex = $componentData['activeIndex'] ?? 0;

            // Loop through the sidebar menu items except for the last one (Logout)
            foreach ($this->sidebarMenu as $index => $item) {
                if ($item['text'] === 'Logout') {
                    continue; // Skip Logout for now
                }

                // Determine the styling for active and inactive menu items
                $itemStyle = $activeIndex === $index
                    ? 'background-color: #575757; color: white;'
                    : 'color: #aaa; text-decoration: none;';
                $hoverStyle = "onmouseover=\"this.style.backgroundColor='#575757'; this.style.color='white';\" onmouseout=\"this.style.backgroundColor='transparent'; this.style.color='#aaa';\"";

                // Render the menu item
                echo
                    "<a href='" . ROOT . $item['url'] . "' 
                        style='display: flex; align-items: center; padding: 10px 15px; border-radius: 5px; $itemStyle' 
                        $hoverStyle>
                        <p style='margin: 0;'>" . $item['text'] . "</p>
                    </a>";
            }
        ?>
    </div>
    <?php
        // Render the Logout button separately
        $logoutItem = array_filter($this->sidebarMenu, fn($item) => $item['text'] === 'Logout');
        if ($logoutItem) {
            $logout = reset($logoutItem); // Get the Logout menu item
            echo
                "<a href='" . ROOT . $logout['url'] . "' 
                    style='color: white; text-decoration: none; padding: 10px 15px; background-color: #575757; border-radius: 5px;' 
                    onmouseover=\"this.style.backgroundColor='#444';\" 
                    onmouseout=\"this.style.backgroundColor='#575757';\">
                    Logout
                </a>";
        }
    ?>
</div>
